@extends('layout')

@section('css')
<style>

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.loading {
  display: flex;
  justify-content: center;
  align-items:center;
  transition: 0.5s;
  top:0;
  width:100%;
  height:100%;
}

.loading::after {
  content: "";
  width: 37.6px;
  height: 37.6px;
  border: 8px solid #f7c9bc;
  border-top-color: #f68d6f;
  border-radius: 50%;
  animation: loading 1s linear infinite;
}

@keyframes loading {
  to {
    transform: rotate(1turn);
  }
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
@stop

@section('isi')
    <h1>Self-Confidence Assessment</h1>
    <div style="font-weight: bold">Berisi 5 pertanyaan menggunakan skala 0 sampai 3 untuk menghitung skor akhir.</div>
    <div style="font-weight: bold">Data diri dan skor kamu bersifat rahasia</div>
    <div style="font-weight: bold">Merasa minder dan kurang percaya diri?</div>
    <div style="font-weight: bold">Merasa dirimu tidak berharga?</div>
    <br>
    <form action="{{ url('/insert-asessment-user-data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
            @error('nama_lengkap')
                <span class="text-danger">Nama Lengkap Tolong diisi</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Nomor Whatsapp</label>
            <input type="number" class="form-control" placeholder="Nomor Whatsapp" name="nomor_wa">
            @error('nomor_wa')
            <span class="text-danger">Nomor Whatsapp Tolong diisi</span>
            @enderror
        </div>

        <div class="form-group" id="kotanya">
            <label>Kota</label>
            <select class="theSelectkota form-select w-100" name="kota" id="kotaku">
                <option selected disabled>--Select--</option>
                @foreach ($kota as $kota)
                    <option value={{ $kota->id }}>{{ $kota->nama_kota }}</option>
                @endforeach
            </select>
        </div>
        @error('kota')
            <span class="text-danger">Kota Tolong diisi</span>
        @enderror

        <div class="form-group">
            <label>Umur</label>
            <input type="number" class="form-control" placeholder="Umur" name="umur">
            @error('umur')
                <span class="text-danger">Umur Tolong diisi</span>
            @enderror
        </div>

        <button class="btn btn-primary ">Submit</button>
    </form>
@stop



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>        
    <script> 
    
        // $('#provinsi').change( function() {
        //     $("#kotaku").empty();
        // });

        $(".theSelect").select2();
        $(".theSelectkota").select2();

       

    </script>
@stop