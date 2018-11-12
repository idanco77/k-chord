@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">ADD NEW MENU LINK</h4>
        </div>
    </div>
</div>
<div class="col-md-4">
    <form action="{{ url('cms/menu') }}" method="POST" novalidate="novalidate">
    @csrf
    <div class="form-group">
        <label for="link">Link</label>
        <input value="{{ old('link') }}" type="text" name="link" class="form-control original-text" id="link" placeholder="Link Text">
        <span class="text-danger">{{ $errors->first('link') }}</span>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Title Text">
        <span class="text-danger">{{ $errors->first('title') }}</span>
    </div>
    <div class="form-group">
        <label for="url">Url</label>
        <input value="{{ old('url') }}" type="text" name="url" class="form-control target-text" id="url" placeholder="Url">
        <span class="text-danger">{{ $errors->first('url') }}</span>
    </div>
    <button type="submit" name="submit" class="btn btn-success"><i class="mdi mdi-content-save"></i> Save menu</button>
    <a href="{{ url('cms/menu') }}" class="btn btn-light"><i class=" mdi mdi-keyboard-backspace"></i> Cancel</a>

</form>
</div>

    



</div><!-- container -->

@endsection