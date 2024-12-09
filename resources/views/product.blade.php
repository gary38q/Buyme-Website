@extends('layout')

@section('css')
<style>

.card-body
{border: solid 1px #f68d6f;}

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
  @foreach ($produk as $produk)
  <div class="col-sm-12 col-md-6 mb-4 d-flex">
        <div class="card">
          <div class="card-body">
              <img class="img-fluid" src="{{ asset('public/'.$produk->imagepath) }}">
              <div class="card-title">{{ $produk->product_name }}</div>
              <div>
                <span style="text-decoration: line-through;">150.000</span>
                <span>Rp <?php echo number_format( $produk->price , 0,',','.') ?></span>
              </div>
            <br>
              <a href="{{ url('Detail-Product')}}/{{ $produk->product_name }}" class="btn " style="background-color:#f68d6f; color:white"><i class="fa-solid fa-cart-shopping"></i> Buy now</a>
          </div>
        </div>
      </div>
    
  @endforeach
  </div>

@stop