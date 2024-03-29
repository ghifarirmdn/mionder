<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" >
    <title>Register</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@700 isplay=swap");
    html{
        font-family: "Poppins", sans-serif;
    }
</style>
<body>
    <div class="container" style="display: flex; align-items: center; justify-content: center; height: 100vh;"><br>
        <div class="col-md-6">
            <h2 class="text-center">Form Registrasi</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{ route('actionRegister') }}"  method="post">
            @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Name</label>
                    <input type="name" name="name" class="form-control" placeholder="name" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Role</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option selected>Piih salah satu</option>
                        <option value="Pasien">Pasien</option>
                        <option value="Dokter">Dokter</option>
                      </select>
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-block" style="background-color: #004aad; color: white">Register</button>
                <hr>
                <p class="text-center">Sudah punya akun silahkan <a href="/login">Login Disini!</a></p>
            </form>
        </div>
    </div>
</body>
</html>