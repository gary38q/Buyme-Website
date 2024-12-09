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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/claim-hadiah') }}"><i class="fa-solid fa-user"></i> BuyMe GanG</a>
@stop

@section('isi')
    <form action="{{ url('/Insert-Undian') }}" method="POST" enctype="multipart/form-data">
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
        <div class="col">
          <div class="form-group row">
              <div class="col-12">Provinsi</div>
              <select class="theSelect col" name="provinsi" id="provinsi">
              <option selected disabled>--Select--</option>
                      @foreach ($provinsi as $provinsi)
                      <option value={{ $provinsi->id }}>{{ $provinsi->provinsi }}</option>
                      @endforeach
              </select>
          </div>
              @error('provinsi')
                <span class="text-danger">Provinsi Tolong diisi</span>
              @enderror

          <div class="form-group row" id="kotanya">
            <div class="col-12">Kota</div>
            <select class="theSelectkota col" name="kota" id="kotaku">
            </select>
          </div>
            @error('kota')
              <span class="text-danger">Kota Tolong diisi</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Tanggal Pembelian</label>
            <input type="date" class="form-control datepicker" placeholder="Tanggal Pembelian" name="tanggal_beli">
            @error('tanggal')
                <span class="text-danger">Tanggal Pembelian Tolong diisi</span>
            @enderror
        </div>

        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
          @error('tanggal')
              <span class="text-danger">Tanggal Lahir Tolong diisi</span>
          @enderror
        </div>
      
            <div class="form-group">
                <label>Nomor Undian</label>
                <input type="text" class="form-control" placeholder="Nomor Undian" name="nomor_undian">
                @error('nomor_undian')
                    <span class="text-danger">Nomor Undian Tolong diisi</span>
                @enderror
            </div>

        <button class="btn btn-primary ">Submit</button>
    </form>

  <!-- Modal -->
  <div class="modal fade" id="ModalCongrats" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="loading">
                    <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...
                    </div>
            </div>
      <div class="modal-content" id="contentku" style="display: none">
        <div class="modal-body">
             
            <a href="https://wa.me/+6282112916898?text=Halo bestie, aku mau claim voucher belanja :) %0aini Kode Voucher aku ya : (Tolong Diisi) " target="_blank">
                <img class="img-fluid" src="{{  asset('public/product/image/voucher.jpg') }}">
            </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@stop



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
        {{-- @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'tidak_ada')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("Modalnotfound"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif --}}

        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'success')
        <script>
            const loading = document.querySelector('.loading');
            var myModal = new bootstrap.Modal(document.getElementById("ModalCongrats"), {});
            myModal.show();
            var myContent = document.getElementById('contentku');
            loading.style.display="flex";
            setTimeout(()=>{
                loading.style.display="none";
                // document.onreadystatechange = function () {
                myContent.style.display = "block";
                // };
                }, 5000)

            
        </script>
        @endif

        {{-- @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'fail')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("ModalUsed"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif --}}
        
    <script>
        $('#provinsi').change( function() {
            $("#kotaku").empty();
        });

        $(".theSelect").select2();
        $(".theSelectkota").select2();
          $('#provinsi').change(function(){
              $.ajax ({
                  type: "GET",
                  url: '{{ url('/')}}/get-kota-data/'+$('#provinsi').val(),
                  dataType: "json",
                  success: function(res) {
                      var options = '';
                      for(var i=0; i<res.length; i++) { // Loop through the data & construct the options
                          options += '<option value="'+res[i].nama_kota+'">'+res[i].nama_kota+'</option>';
                      }
                    $('#kotaku').append(options);
                    },
                  error: function (request, status, error) {
                    alert(request.statusText + "[" + request.status + "]");
                    alert(request.responseText);
              }
            })
        })
    </script>
@stop