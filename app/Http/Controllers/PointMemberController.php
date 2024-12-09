<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp;
use Carbon\Carbon;

class PointMemberController extends Controller
{
    
    public function index(){
        $member = DB::table('hadiahs')->OrderBy('jumlah_point')->get();
        
        return view('claimhadiah',compact('member'));
    }
    
    public function get_point_member($id){
        $member = DB::table('point_member')->where('nomor_member',$id)->first();
        
        
        if($member){
            return response([
                'status'    => true,
                'data'      => $member,
                'message'   => 'Data member Terambil'
            ]);
            
        }
        else{
            return response([
                'status'    => false,
                'message'   => 'Member Tidak Terdaftar'
            ]);
        }
    }
    
    public function create_point_member(){
        
        $member = DB::table('point_member')->OrderBy('jumlah_point','DESC')->get();
        return view('create_member',compact('member'));
    }
    
    public function insert_point_member(Request $request){
        
        $check = DB::table('point_member')->where('nomor_member',$request->id)->first();
        $current_date_time = Carbon::now()->toDateTimeString();
        
        if($check){
            DB::table('point_member')->where('nomor_member',$request->id)->update([
                    'jumlah_point'  => $check->jumlah_point + $request->jumlah_point,
                    'updated_at'    => $current_date_time
                ]);
                
            DB::table('history_point')->insert([
                    'point_member_id'   => $request->id,
                    'jumlah_point'      => $request->jumlah_point,
                    'keterangan'        => 'Penambahan Point Member',
                    'created_at'        => $current_date_time,
                    'updated_at'        => $current_date_time
                ]);
        }
        else{
            DB::table('point_member')->insert([
                    'nomor_member'  => $request->id,
                    'nama_member'   => $request->name,
                    'jumlah_point'  => $request->jumlah_point,
                    'created_at'    => $current_date_time,
                    'updated_at'    => $current_date_time
                ]);
                
            DB::table('history_point')->insert([
                    'point_member_id'   => $request->id,
                    'jumlah_point'      => $request->jumlah_point,
                    'keterangan'        => 'Pembuatan Member',
                    'created_at'        => $current_date_time,
                    'updated_at'        => $current_date_time
                ]);
        }
        return Redirect::back()->with('message', 'Berhasil!');
    }
    
    public function update_member_point_api(){
        $client = new GuzzleHttp\Client();
        
        $credentials = base64_encode('nbdn3ha9:r16ru40r4m8kp3w8pbbh');

        $response = $client->get('https://sheetdb.io/api/v1/og3k990207qxb', [
            'headers' => [ 'Authorization' => 'Basic ' . $credentials ],
        ]);
           
        $data_string = json_decode($response->getBody()->getContents());
        
        foreach($data_string as $checkaja){
            $check_data = DB::table('point_member')->where('nomor_member',$checkaja->nomor_member)->first();
            $current_date_time = Carbon::now()->toDateTimeString();
            
            if($check_data){
                DB::table('point_member')->where('nomor_member',$checkaja->nomor_member)->update([
                    'nama_member'   => $checkaja->nama_member,
                    'jumlah_point'  => $checkaja->jumlah_point,
                    'updated_at'    => $current_date_time
                ]);
            }
            else{
                DB::table('point_member')->insert([
                    'nomor_member'  => $checkaja->nomor_member,
                    'nama_member'   => $checkaja->nama_member,
                    'jumlah_point'  => $checkaja->jumlah_point,
                    'created_at'    => $current_date_time,
                    'updated_at'    => $current_date_time
                ]);
            }
        }
            return true;
    }
}