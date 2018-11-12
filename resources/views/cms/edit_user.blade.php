@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT USER</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="{{ url('cms/users/' . $user['id']) }}" method="POST" enctype=multipart/form-data novalidate="novalidate">
    @csrf
    {{ method_field('PUT') }}
    <input type="hidden" name="user_id" value="{{ $user['id'] }}">
    <div class="form-group">
        <label for="name">Name</label>
        <input value="{{ $user['name'] }}" type="text" name="name" class="form-control" id="name" placeholder="Name">
        <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input value="{{ $user['email'] }}" type="email" name="email" class="form-control" id="email" placeholder="Email">
        <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <span class="text-danger">{{ $errors->first('password') }}</span>
    </div>
    <div class="form-group">
        <label for="confirm-pass">Confirm password</label>
        <input type="password" name="password_confirmation" class="form-control" id="confirm-pass" placeholder="Confirm password">
        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
    </div>
     <div class="form-group">
        <label for="address">Address</label>
        <input value="{{ $user['address'] }}" type="text" name="address" class="form-control" id="address" placeholder="Address">
        <span class="text-danger">{{ $errors->first('address') }}</span>
     </div>
    <div class="form-group">
        <label for="role">User role</label>
        <select name="role" id="role" class="form-control">
            <option value="">Choose user role</option>
            <option value="2">User</option>
            <option value="8">Administrator</option>
        </select>
        <span class="text-danger">{{ $errors->first('role') }}</span>
    </div>
    
    <img src="{{ asset('images/' . $user['image']) }}" alt="{{ $user['name'] }}" width="50"><br>
    <small>* Recommended size: 250 x 250 px</small>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label image" for="inputGroupFile01">Choose image</label>
            </div>
        </div>
        <span class="text-danger">{{ $errors->first('image') }}</span><br>
    
    
    
        <button type="submit" name="submit" class="btn btn-success"><i class=" mdi mdi-arrow-up-bold"></i> Update user</button>
    <a href="{{ url('cms/users') }}" class="btn btn-light"><i class="mdi mdi-keyboard-backspace"></i> Cancel</a>

</form>
</div>

    



</div><!-- container -->

@endsection