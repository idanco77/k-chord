@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">ADD NEW PRODUCT</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="{{ url('cms/products') }}" method="POST" enctype=multipart/form-data novalidate="novalidate">
        @csrf
        <div class="form-group">
            <label for="categorie-id">Category</label>
            <select name="categorie_id" id="categore-id" class="form-control">
                <option value="">Choose category...</option>
                @foreach($categories as $category)
                <option @if(old('categorie_id') == $category['id']) selected="selected" @endif value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                @endforeach
            </select>
            <span class="text-danger">{{ $errors->first('categorie_id') }}</span>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{ old('title') }}" type="text" name="title" class="form-control original-text" id="title" placeholder="Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="form-group">
            <label for="article">Article</label>
            <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
            <span class="text-danger">{{ $errors->first('article') }}</span>
        </div>
        <div class="form-group">
            <label for="url">Url</label>
            <input value="{{ old('url') }}" type="text" name="url" class="form-control target-text" id="url" placeholder="Url">
            <span class="text-danger">{{ $errors->first('url') }}</span>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{ old('price') }}" type="text" name="price" class="form-control" id="price" placeholder="Price">
            <span class="text-danger">{{ $errors->first('price') }}</span>
        </div>
        <div class="form-group">
            <label for="orgnl-price">Original price</label>
            <input value="{{ old('orgnl_price') }}" type="text" name="orgnl_price" class="form-control" id="orgnl-price" placeholder="Original price">
            <span class="text-danger">{{ $errors->first('orgnl_price') }}</span>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input value="{{ old('stock') }}" type="text" name="stock" class="form-control" id="stock" placeholder="Stock">
            <span class="text-danger">{{ $errors->first('stock') }}</span>
        </div>

        <small>* Recommended size: 270 x 300 px</small>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01 image">
                <label class="custom-file-label image" for="inputGroupFile01">Choose main image</label>
            </div>

        </div>
        <span class="text-danger">{{ $errors->first('image') }}</span><br>

        <small>* Recommended size: 270 x 300 px</small>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image2" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">Choose image 2</label>
            </div>

        </div>
        <span class="text-danger">{{ $errors->first('image2') }}</span><br>
        <small>* Recommended size: 270 x 300 px</small>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image3" class="custom-file-input" id="inputGroupFile03">
                <label class="custom-file-label" for="inputGroupFile03">Choose image 3</label>
            </div>

        </div>
        <span class="text-danger">{{ $errors->first('image3') }}</span><br>

        <small>* Recommended size: 270 x 300 px</small>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image4" class="custom-file-input" id="inputGroupFile04">
                <label class="custom-file-label" for="inputGroupFile04">Choose image 4</label>
            </div>

        </div>
        <span class="text-danger">{{ $errors->first('image4') }}</span><br>
        <button type="submit" name="submit" class="btn btn-success"><i class="mdi mdi-content-save"></i> Save product</button>
        <a href="{{ url('cms/products') }}" class="btn btn-light"><i class="mdi mdi-keyboard-backspace"></i> Cancel</a>

    </form>
</div>





</div><!-- container -->

@endsection