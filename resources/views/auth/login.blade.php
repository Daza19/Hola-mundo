@extends('layouts.app')

@section('title', 'Login')


@section('content')

    <h1 class="text-center p-3">Iniciar Sesión</h1>

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

              <form action="" method="POST">
                @csrf
      

                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
      
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