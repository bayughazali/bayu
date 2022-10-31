<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('style.css')}}">
  @include('dashbord.css')
</head>
<body>

<div class="row justify-content-center">
  <div class="col-md-6">
  <main class="form-registation mx-auto w-50 mt-5">
<form method="post" action="/register">
  @csrf
<h1 class="h3 mb-3 fw-normal text-center">FROM REGISTRTION</h1>

<div class="form-floating">
<label for="floatingInput">email</label>
  <input type="email" name='email' class="form-control" id="floatingInput" placeholder="silahkan isi alamat email anda">
  @error('email')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-floating">
<label for="floatingInput">Name</label>
  <input type="text" name='name' class="form-control" id="floatingInput" placeholder="silahkan isi nama anda">
  @error('name')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-floating">
<label for="floatingInput">Alamat</label>
  <input type="text" name='alamat' class="form-control" id="floatingInput" placeholder="silahkan isi almat anda">
  @error('alamat')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="form-floating">
<label for="floatingInput">Telepon</label>
  <input type="text" name='telepon' class="form-control" id="floatingInput" placeholder="silahkan isi nomor telepon anda">
  @error('telepon')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-floating">
<label for="floatingPassword">Password</label>
  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
  @error('password')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>

<div class="checkbox mb-3">
  <label>
    
  
  </label>
</div>
<button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
</form>
<small class="d-block text-center "> <a href="/">login</small>
</main>
</body>
</html>
  </div>  
</div>


