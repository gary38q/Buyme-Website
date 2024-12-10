<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Page</title>

    <style>
        .btn-color{
            background-color: #0e1c36;
            color: #fff;
        }

        .profile-image-pic{
            height: 200px;
            width: 200px;
            object-fit: cover;
        }



        .cardbody-color{
            background-color: #ebf2fa;
        }

        a{
            text-decoration: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/19efc8c9d6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login</h2>
                @if(session()->has('error'))
                    {{ session()->get('error') }}
                @endif
                <div class="card my-5">

                <form class="card-body cardbody-color p-lg-5" action="{{ url('post-internal-login') }}" method="POST">
                    @csrf
                    <div class="text-center">
                    <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                        width="200px" alt="profile">
                    </div>

                    <div class="mb-3">
                    <input type="text" class="form-control" id="Username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button></div>
                </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>