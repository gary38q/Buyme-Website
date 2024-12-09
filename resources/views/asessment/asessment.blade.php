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
    <div class="container">
        <h1>Self-Confidence Assessment</h1>
        <div style="font-weight: bold">Dalam 2 minggu terakhir,</div>
        <div class="mb-3"><strong>Seberapa sering kamu merasa terganggu oleh hal berikut...</strong></div>
        <form action="{{ url('/insert-asessment-result') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_user" value="{{ $id }}">
            <div class="form-group mb-5">
                <label style="font-size: 20px"><strong>Kurang percaya diri dalam kegiatan sehari-hari…</strong></label>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Tidak pernah</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question1" class="form-check-input" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Beberapa hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question1" class="form-check-input" value="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Hampir setiap hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question1" class="form-check-input" value="3">
                        </div>
                    </div>              
                </div>
            </div>

            <div class="form-group mb-5">
                <label style="font-size: 20px"><strong>Membanding-bandingkan dirimu dengan orang lain</strong></label>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Tidak pernah</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question2" class="form-check-input" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Beberapa hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question2" class="form-check-input" value="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Hampir setiap hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question2" class="form-check-input" value="3">
                        </div>
                    </div>              
                </div>
            </div>

            <div class="form-group mb-5">
                <label style="font-size: 20px"><strong>Merasa sedih dan menganggap dirimu tidak berharga?</strong></label>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Tidak pernah</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question3" class="form-check-input" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Beberapa hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question3" class="form-check-input" value="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Hampir setiap hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question3" class="form-check-input" value="3">
                        </div>
                    </div>               
                </div>
            </div>

            <div class="form-group mb-5">
                <label style="font-size: 20px"><strong>Sulit bergaul dengan banyak orang atau minder didepan banyak orang?</strong></label>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Tidak pernah</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question4" class="form-check-input" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Beberapa hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question4" class="form-check-input" value="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Hampir setiap hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question4" class="form-check-input" value="3">
                        </div>
                    </div>           
                </div>
            </div>
            
            <div class="form-group mb-5">
                <label style="font-size: 20px"><strong>Merasa buruk tentang diri sendiri, atau merasa gagal atau mengecewakan diri atau keluargamu?</strong></label>
                <div class="row">
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Tidak pernah</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question5" class="form-check-input" value="1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Beberapa hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question5" class="form-check-input" value="2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-center">
                            <strong>Hampir setiap hari</strong>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="radio" name="question5" class="form-check-input" value="3">
                        </div>
                    </div>                
                </div>
            </div>

            <button class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@stop



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@stop