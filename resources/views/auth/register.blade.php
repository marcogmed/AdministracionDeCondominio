@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <!--Last name label-->
                         <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Parterno') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <!--Surname label-->

                         <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!--House number-->

                         <div class="form-group row">
                            <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('Número de Casa') }}</label>

                            <div class="col-md-6">
                                <input id="house_number" type="text" class="form-control{{ $errors->has('house_number') ? ' is-invalid' : '' }}" name="house_number" value="{{ old('house_number') }}" required autofocus>

                                @if ($errors->has('house_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('house_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--phone number-->

                         <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                    

                    <!--Division -->

                        <div class="form-group row">
                            <label for="divison_id" class="col-md-4 col-form-label text-md-right">{{ __('Fraccionamiento') }}</label>

                            <div class="col-md-6">
                                <input id="divison_id" type="text" class="form-control{{ $errors->has('divison_id') ? ' is-invalid' : '' }}" name="divison_id" value="{{ old('divison_id') }}" required autofocus>

                                @if ($errors->has('divison_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('division_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--Condominium-->

                        <div class="form-group row">
                            <label for="condominium_id" class="col-md-4 col-form-label text-md-right">{{ __('Condominio') }}</label>

                            <div class="col-md-6">
                                <input id="condominium_id" type="text" class="form-control{{ $errors->has('condominium_id') ? ' is-invalid' : '' }}" name="condominium_id" value="{{ old('condominium_id') }}" required autofocus>

                                @if ($errors->has('condominium_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('condominium_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="text-md-right col-form-label col-md-4 col-sm-2 pt-0">Rol</legend>
                              <div class="col-sm-10 col-md-8">
                                @foreach($roles as $rol)
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="{{ $rol->id }}" value="{{ $rol->id }}" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    {{ $rol->description }}
                                  </label>
                                </div>
                                @endforeach
                              </div>
                            </div>
                          </fieldset>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
