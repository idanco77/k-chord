@extends('master')

@section('main_content')

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <ul class="breadcrumb justify-content-lg-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item active">Register</li>
        </ul>
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Register</h1>
            </div>

        </div>
    </div>
</section>
<!-- text page-->
<section class="padding-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="block">
                    <div class="block-header">
                        <h5>Register</h5>
                    </div>
                    <div class="block-body"> 
                        <hr>
                        <form action="" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname" class="form-label">* First name</label>
                                        <input id="fname" type="text" name="fname" class="form-control" value="{{ old('fname') }}">
                                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lname" class="form-label">* Last name</label>
                                        <input id="lname" type="text" name="lname" class="form-control" value="{{ old('lname') }}">
                                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="form-label">* Address</label>
                                        <input id="address" type="text" name="address" class="form-control" value="{{ old('address') }}">
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">* Email</label>
                                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password" class="form-label">* Password</label>
                                        <input id="password" type="password" name="password" class="form-control">
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm-password" class="form-label">* Confirm password</label>
                                        <input id="confirm-password" type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <small>* Recommended size: 250 x 250 px</small>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label image" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <span class="text-danger">{{ $errors->first('profile_image') }}</span><br>

                                </div>
                            </div> 

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-primary">Register<i class="fas fa-user-plus"></i></button>
                            </div>
                        </form>
                        <hr>
                        <p class="lead">Already a registered customer? </p>
                        <a href="{{ url('user/login') }}" class="btn btn-template btn-md wide">Login<i class="fas fa-user-plus"></i></i></a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection