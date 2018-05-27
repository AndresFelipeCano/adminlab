@extends('layouts.app')
@section('styles')
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
.body-register {
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  font-weight: 300;
  margin-top: 0px;

}
.wrapper-register {
  background: #212529;
  background: linear-gradient(#212529 0%, #212529 100%);
  background: linear-gradient(to bottom right, #212529 0%, #212529 100%);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 640px;
  overflow: hidden;
}
.wrapper.form-success .container h1 {
          transform: translateY(85px);
}
.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 30px 0;
  height: 400px;
  text-align: center;
}
.container h1 {
  font-size: 40px;
  transition-duration: 1s;
  transition-timing-function: ease-in;
  font-weight: 200;
}
.form-register {
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
.form-register   .input-register {
    appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: rgba(255, 255, 255, 0.2);
  width: 250px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px 60%;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
.form-register  .input-register:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
.form-register  .input-register:focus {
  background-color: white;
  width: 270px;
  color: #34495E;
}
.form-register  button {
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px auto auto 15px;
  color: #CACFD2;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
  transition-duration: 0.25s;

}
.form-register  button:hover {
  background-color: #f5f7f9;
}
.bg-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.bg-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  animation: square 25s infinite; 
  transition-timing-function: linear;
}
.bg-bubbles li:nth-child(1) {
  left: 10%;
}
.bg-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  animation-delay: 2s;
  animation-duration: 30s;
}
.bg-bubbles li:nth-child(3) {
  left: 25%;
  animation-delay: 4s;
  
}
.bg-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}
.bg-bubbles li:nth-child(5) {
  left: 70%;
}
.bg-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}
.bg-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  animation-delay: 7s;
}
.bg-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  animation-delay: 15s;
  animation-duration: 40s;
}
.bg-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  animation-delay: 2s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}
.bg-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  animation-delay: 11s;        
}
.bg-bubbles li:nth-child(11) {
  left: 95%;
  width: 30px;
  height: 30px;
  animation-delay: 15s;        
}
.bg-bubbles li:nth-child(12) {
  left: 82%;
  width: 65px;
  height: 65px;
  animation-delay: 11s;        
}
.bg-bubbles li:nth-child(13) {
  left: 50%;
  width: 120px;
  height: 120px;
  animation-delay: 45s;        
}
.bg-bubbles li:nth-child(14) {
  left: 78%;
  width: 160px;
  height: 160px;
  animation-delay: 45s;        
}
.bg-bubbles li:nth-child(15) {
  left: 82%;
  width: 90px;
  height: 90px;
  animation-delay: 50s;        
}
.remember{
   right: 300px;
   left: 300px;
}
@keyframes square {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-700px) rotate(600deg);
  }
}
@keyframes square {
  0% {
            transform: translateY(0);
  }
  100% {
            transform: translateY(-700px) rotate(600deg);
  }
}

    </style>
@endsection
@section('content')

        <div class="col-md-12 body-register">

            <div class="wrapper-register">
                <div class="container">
                <div class="card-body ">
                 <h1 style="position: relative; left: 50px">Registrarse</h1>
                    <form method="POST" action="{{ route('register') }}" class="form-register">
                        @csrf

                        <div class="form-group row">
                            <div class="col-1">
                                  <input placeholder="Nombre" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} input-register" name="name" value="{{ old('name') }}" required autofocus>

                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                            </div>
                                               
                            <div class="col-md-9 offset-2">
                                <input placeholder="Apellido" id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }} input-register" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-1">
                                <input placeholder="ID UPB" id="id_upb" type="number" class="form-control{{ $errors->has('id_upb') ? ' is-invalid' : '' }} input-register" name="id_upb" value="{{ old('id_upb') }}" required autofocus>

                                @if ($errors->has('id_upb'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('id_upb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-9 offset-2">
                                <input placeholder="telefono" id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }} input-register" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-1">
                                <input placeholder="Carrera" id="carrera" type="text" class="form-control{{ $errors->has('carrera') ? ' is-invalid' : '' }} input-register" name="carrera" value="{{ old('carrera') }}" required>

                                @if ($errors->has('carrera'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('carrera') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-9 offset-2">
                              <select placeholder="Cargo" class="form-control input-register" id="cargo" name="cargo" type="text" size="1.7" required>
                                <option disabled>Seleccionar cargo</option>
                                <option name="cargo" value="monitor" selected>Monitor</option>
                                <option name="cargo" value="administrador">Administrador</option>
                              </select>

                                @if ($errors->has('cargo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                             
                        </div>
                        <div class="form-group row">
                            <div class="col-1">
                                <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-register" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                            <div class="col-md-9 offset-2">
                                <input placeholder="Contraseña" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-register" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-1"></div>
                            <div class="col-md-9 offset-2">
                                <input placeholder="Confirmar Contraseña" id="password-confirm" type="password" class="form-control input-register" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary input-register">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                        <ul class="bg-bubbles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        
@endsection
