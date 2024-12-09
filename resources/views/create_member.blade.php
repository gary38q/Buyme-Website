@extends('layout')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
<style>

.card-body
{
    border-style: solid;
    border-width: 1px 1px 0px 1px;
    border-color: #f68d6f;
}

.card-footer
{
    border-style: solid;
    border-width: 0px 1px 1px 1px;
    border-color: #f68d6f;
}

@media screen and (max-width: 991px){
.navku{
  font-size: 10px;
  margin-left: 5px;
  margin-right: 5px
}
}

</style>
@stop

@section('navbar')
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')

    <div class="row">
        <div class="col-md-6 col-sm-12 mt-5">
            <h3>Insert Point Member</h3>
            @if(session()->has('message'))
                <div class="alert alert-success w-25">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ url('insert-data-member') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label>Nomor Member</label>
                <input type="text" class="form form-control w-75" name="id" id="id_member" required>
                
                <div id="nama_member" style="display: none;">
                <br>
                    <label>Nama Member</label>
                    <input type="text" class="form form-control w-75" name="name" id="namaku">
                </div>
                
                <br>
                <label>Jumlah Point Member</label>
                <input type="text" class="form form-control w-75" name="jumlah_point" required>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <div class="col-md-6 col-sm-12 mt-5 overflow-auto">
            <h3>Table Point Member</h3>
            <table id="buytables" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Member</th>
                        <th>Nama Member</th>
                        <th>Jumlah Point</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $keys=>$member)
                    <tr>
                        <td>{{ $keys+1 }}</td>
                        <td>{{ $member->nomor_member }}</td>
                        <td>{{ $member->nama_member }}</td>
                        <td>{{ $member->jumlah_point }}</td>
                    </tr>
      
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
      
@stop

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
<script>
    $('#buytables').DataTable({
    responsive: true
    });

    $('#id_member').change(function (){
         $.ajax({
            method: "GET",
            url: "{{ url('data-member') }}"+"/"+$('#id_member').val(),
            success: function(response) {
                if(response.status) {
                    $('#nama_member').css('display','none');
                    $('#namaku').removeAttr('required');
                }
                else {
                    $('#nama_member').css('display','block');
                    $('#namaku').prop('required',true);
                }
            }
        });
    });
  
</script>
@stop