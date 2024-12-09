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
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')
@stop