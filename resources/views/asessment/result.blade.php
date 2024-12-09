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
    <div>
        <h1>Nilai Self-Confidence Assessment: {{ $result }}</h1>
    </div>
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