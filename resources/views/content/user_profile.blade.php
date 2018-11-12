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
        <a href="{{ url('profile/' . $profile['id']) }}" class="active list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
        <a href="{{ url('profile/' . $profile['id'] . '/edit') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Edit profile</span></a>
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
                        <h5>Your profile deteils </h5>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input disabled="disabled" id="name" type="text" name="name" value="{{ $profile['name'] }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input disabled="disabled" id="email" type="email" name="email" value="{{ $profile['email'] }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input disabled="disabled" id="address" type="text" name="address" value="{{ $profile['address'] }}" class="form-control">
                        </div>
                    </div>                   
                </form>
            </div>
        </div>
    </div>
</section>

@endsection