@extends('layout')

@section('css')
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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')

    <img class="img-fluid" src="{{ asset('public/product/image/buymegang_header.jpg') }}">
    <!--Bagian Member-->
    <div class="card mt-3">
        <div class="card-body" style="border: solid 1px #f68d6f;">
            <form action="#" onsubmit="checkmember()">
                <label>Check Point Member</label>
                <input type="text" class="form form-control" id="nomor_member">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br>
    <h3>Tukarkan poin anda dengan hadiah berikut: </h3>
    <div class="row">
      @foreach ($member as $member)
      <div class="col-sm-12 col-md-6 mb-4 d-flex">
        <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ asset('public/'.$member->image_link) }}">
                <div class="card-title">{{ $member->nama_hadiah }}</div>
            </div>
            <div class="card-footer bg-white">
                <div>
                    <label>Jumlah Point yang dibutuhkan:</label>
                    <span class="font-weight-bold">{{ $member->jumlah_point }}</span>
                </div>
                <br>
                <a href="#" class="btn" style="background-color:#f68d6f; color:white;"><i class="fa-solid fa-cart-shopping"></i> Redeem Now</a>
            </div>
        </div>
      </div>
      
    @endforeach
    </div>
      
@stop

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>

  function checkmember(){
         $.ajax({
            method: "GET",
            url: "{{ url('data-member') }}"+"/"+$('#nomor_member').val(),
            success: function(response) {
                if(response.status) {
                        Swal.fire({
                          title: 'Hi '+response.data.nama_member,
                          text: 'Jumlah poin anda: '+response.data.jumlah_point
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