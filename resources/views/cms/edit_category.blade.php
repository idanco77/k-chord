@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT CATEGORY</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="{{ url('cms/categories/' . $item['id']) }}" method="POST" enctype=multipart/form-data novalidate="novalidate">
        {{ method_field('PUT') }}
        @csrf
        <input type="hidden" name="item_id" value="{{ $item['id'] }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ $item['title'] }}" type="text" name="title" class="form-control original-text" id="title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="form-group">
            <label for="article">Article</label>
            <textarea name="article" id="article" class="form-control">{{ $item['article'] }}</textarea>
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>
        <div class="form-group">
            <label for="title">Url</label>
            <input value="{{ $item['url'] }}" type="text" name="url" class="form-control target-text" id="url">
            <span class="text-danger">{{ $errors->first('url') }}</span>
        </div>
       
        
        <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['title'] }}" width="50"><br>
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

        <button type="submit" name="submit" class="btn btn-success"><i class=" mdi mdi-arrow-up-bold"></i> Update category</button>
        <a href="{{ url('cms/categories') }}" class="btn btn-light"><i class="mdi mdi-keyboard-backspace"></i> Cancel</a>

    </form>
</div>





</div><!-- container -->

@endsection