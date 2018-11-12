@extends('master')

@section('main_content')

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Your profile</h1><p class="lead">Edit your profile</p>
            </div>
            <div class="col-lg-3 text-right order-1 order-lg-2">
                <ul class="breadcrumb justify-content-lg-end">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="padding-small">
    <div class="container">
        <div class="row">
            <!-- Customer Sidebar-->
            <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
                <div class="customer-profile"><a href="#" class="d-inline-block"><img src="{{ asset('images/' . $profile['image']) }}" class="img-fluid rounded-circle customer-image"></a>
                    <h5>{{ $profile['name'] }}</h5>
                    <p class="text-muted text-small">{{ $profile['address'] }}</p>
                </div>
                <nav class="list-group customer-nav">
                    <a href="{{ url('profile') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span></a>
                    <a href="{{ url('profile/' . $profile['id']) }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
                    <a href="{{ url('profile/' . $profile['id'] . '/edit') }}" class="active list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Edit profile</span></a>
                    <a href="{{ url('user/logout') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="mdi mdi-logout"></span> Log out</span></a>
                </nav>
            </div>

            <div class="col-lg-8 col-xl-9 pl-lg-3">
                <form action="{{ url('profile/' . $profile['id']) }}" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf   
                    {{ method_field('PUT') }}
                    <input type="hidden" name="profile_id" value="{{ $profile['id'] }}">
                    <!-- Invoice Address-->
                    <div class="block-header mb-5">
                        <h5>Change your profile deteils </h5>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" type="text" name="name" value="{{ $profile['name'] }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" name="email" value="{{ $profile['email'] }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="passord" class="form-label">Password</label>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Enter your password">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm-password" class="form-label">Confirm password</label>
                            <input id="confirm-password" type="password" name="password_confirmation" class="form-control" placeholder="Confirm your password">
                            <span class="text-danger">{{ $errors->first('passwird_confirmation') }}</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input id="address" type="text" name="address" value="{{ $profile['address'] }}" class="form-control">
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                        <div class="col-md-6">
                            <small>* Recommended size: 250 x 250 px</small>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label image" for="inputGroupFile01">Choose image</label>
                                </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('profile_image') }}</span><br>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="form-group col-12 mt-3">
                            <button type="submit" class="btn btn-template wide"><i class="fa fa-save"></i>Update changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection