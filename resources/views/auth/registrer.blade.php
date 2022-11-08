@extends('layouts.app')

@section('title', 'Registro')


@section('content')

    <h1 class="text-center p-3">Registro</h1>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              <form action="/registrer" method="POST">

                @csrf
      
                <!-- Email input -->

                <div class="form-outline mb-4">
                    <input type="text" id="name" name="name" class="form-control form-control-lg"
                      placeholder="nombre" />
                  </div>

                  @error('name')
                  <p class="text-danger">{{ $message }}</p>
              @enderror

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="Correo" />
                </div>
      
                @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" />
                </div>

                @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror

                <div class="form-outline mb-3">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg"
                      placeholder="Enter password" />
                  </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  
                <button type="submit" class="btn btn-primary btn-lg float-end"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Registro</button>

                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>

    
@endsection