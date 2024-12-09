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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')

    {{-- Slider --}}
    <div id="myIndicator" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myIndicator" data-slide-to="0" class="active" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="1" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="2" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="3" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="4" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="5" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="6" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner6.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/bannerchristmas.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner5.jpg') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner4.jpg') }}" alt="Four slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner3.jpg') }}" alt="Five slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner2.jpg') }}" alt="Six slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="{{ asset('public/product/image/banner1.jpg') }}" alt="Seven slide">
            </div>
        </div>
    </div>

    {{-- Web --}}
    <div id="webku">
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
    </div>

    {{-- Mobile --}}
    {{-- <div id="mobileku">
      <div class="row">
        @foreach ($produk as $produk)
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url($produk->imagepath) }}">
                <h6 class="card-title">{{ $produk->product_name }}</h6>
                <div>
                  <span style="text-decoration: line-through;">150.000</span>
                  <span> {{ $produk->price }}</span>
                </div>
              <br>
                <a href="{{ url('Detail-Product')}}/{{ $produk->product_name }}" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> Buy now</a>
            </div>
          </div>
        </div>
          
        @endforeach
        </div>
    </div> --}}
    
    <!--Bagian Member-->
    <div class="card">
        <div class="card-body">
            <form action="#" onsubmit="checkmember()">
                <label>Nomor Member</label>
                <input type="text" class="form form-control w-25" id="nomor_member">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
      
@stop

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>

  var x = window.matchMedia("(max-width: 700px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) 
  
  function checkmember(){
         $.ajax({
            method: "GET",
            url: "{{ url('data-member') }}"+"/"+$('#nomor_member').val(),
            success: function(response) {
                if(response.status) {
                        Swal.fire({
                          title: 'Hi '+response.data.nama_member,
                          text: 'Jumlah poin anda: '+response.data.jumlah_point,
                          imageUrl: 'https://unsplash.it/400/200',
                          imageWidth: 400,
                          imageHeight: 200,
                          imageAlt: 'Custom image',
                        })
                }
                else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Maaf!',
                        text: response.message
                    });
                }
            }
        });
  }
</script>
@stop