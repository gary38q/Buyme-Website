@extends('layout')

@section('css')
<style>

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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img class="img-fluid" src="{{ asset('public/'.$produk->imagepath) }}">
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="h2 font-weight-bold">{{ $produk->product_name }}</div>
            <div class="h3"><?php echo number_format( $produk->price , 0,',','.') ?></div>
            <p style="white-space: pre-line">{{ $produk->description }}</p>
            <a href="https://wa.me/+6281398777545?text=Halo saya mau order {{ $produk->product_name }}nya ka :)" 
            class="btn w-100 text-white" target="_blank" style="background-color: #25D366"><i class="fa-brands fa-whatsapp"></i> Order Here</a>
        </div>
    </div>
    

@stop