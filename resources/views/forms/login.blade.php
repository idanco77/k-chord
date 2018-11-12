@extends('master')

@section('main_content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
          <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ul>
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Login</h1>
          </div>
       
        </div>
      </div>
    </section>
    <!-- text page-->
    <section class="padding-small">
        <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="block">
              <div class="block-header">
                <h5>Login</h5>
              </div>
              <div class="block-body"> 
                <hr>
                <form action="" method="POST" novalidate="novalidate">
                    @csrf
                  <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div>
                  <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                  </div>
                  <div class="form-group text-center">
                      <button type="submit" name="submit" class="btn btn-block btn-primary">Login<i class="fas fa-sign-in-alt"></i></button>
                      <span class="text-danger">{{ $errors->first('wrong_login') }}</span>
                  </div>
                </form>
                <hr>
                <p class="lead text-center">Not our registered customer yet? </p>
                <a href="{{ url('user/register') }}" class="btn btn-block btn-template btn-md wide">Register<i class="fas fa-user-plus"></i></i></a>
                <p class="text-center">The whole process will not take you more than a minute!</p>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

@endsection