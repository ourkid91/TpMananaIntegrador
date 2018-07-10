

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link  href="css/login.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">


    <title>Resgistrate a Good job</title>

  </head>
  <body>
@extends('layouts.cabeza');
<div class="transparencia">




<h3> Registrate </h3>
<div class="formulario">
    <form class="" action="" method="POST" enctype="multipart/form-data">
      <div class="container contform">
        <div class="forma">

            <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>

          @endforeach
          </ul>
          {{ csrf_field() }}
      <label>Nombre  </label>
  <input type="text" name="name" value="{{old('name')}}">

      <label>Apellido
        <input type="text" name="apellido" value="{{old('apellido')}}" >
      </label>

        <label>Usuario
  <input type="text" name="usuario" value="{{old('usuario')}}" >
</label>
</div>
<div class="formb">


<label>Correo Electronico
  <input type="email" name="email" value="{{old('email')}}">
</label>

<br>
<label>Fecha de nacimiento
<input type="date" name="fecha" value="{{old('fecha')}}" min="1950-01-01" max="2019-01-01">
</label>
</select>

  <label>Contraseña
    <input type="password" name="password" value="">
  </label>

<label><p>Foto de perfil  </p></label> <br>
<input id="regAvatar" type="file" name="avatar" value="">
</div>


  <button type="submit">Enviar</button>
<div class="container">
</div>

    </div>




  </form>

</div>

</div>
  </body>
</html>
