@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">ADD NEW CATEGORY</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="{{ url('cms/categories') }}" method="POST" enctype=multipart/form-data novalidate="novalidate">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ old('title') }}" type="text" name="title" class="form-control original-text" id="title" placeholder="Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="form-group">
            <label for="cat-article">Article</label>
            <input value="{{ old('article') }}" type="text" name="article" class="form-control" id="cat-article" placeholder="Article">
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input value="{{ old('url') }}" type="text" name="url" class="form-control target-text" id="url" placeholder="Url">
            <span class="text-danger">{{ $errors->first('url') }}</span>
        </div>
        <small>* Recommended size: 350 x 200 px</small>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01 image">
                <label class="custom-file-label image" for="inputGroupFile01">Choose image</label>
            </div>

        </div>
        <span class="text-danger">{{ $errors->first('image') }}</span><br>



        <button type="submit" name="submit" class="btn btn-success"><i class="mdi mdi-content-save"></i> Save category</button>
        <a href="{{ url('cms/categories') }}" class="btn btn-light"><i class=" mdi mdi-keyboard-backspace"></i> Cancel</a>

    </form>
</div>





</div><!-- container -->

@endsection