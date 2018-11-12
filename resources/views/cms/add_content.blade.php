@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">ADD NEW CONTENT</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
    <form action="{{ url('cms/content') }}" method="POST" novalidate="novalidate">
    @csrf
    <div class="form-group">
        <label for="menu-link">Menu link</label>
        <select name="menu_id" id="menu-link" class="form-control">
            <option value="">Choose link...</option>
            @foreach($menu as $item)
            <option @if(old('menu_id') == $item['id']) selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
            @endforeach
        </select>
        <span class="text-danger">{{ $errors->first('menu_id') }}</span>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Title">
        <span class="text-danger">{{ $errors->first('title') }}</span>
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea name="article" id="article" class="form-control" placeholder="Article">{{ old('article') }}</textarea>
        <span class="text-danger">{{ $errors->first('article') }}</span>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success"><i class="mdi mdi-content-save"></i> Save content</button>
    <a href="{{ url('cms/content') }}" class="btn btn-light"><i class=" mdi mdi-keyboard-backspace"></i> Cancel</a>

</form>
</div>

    



</div><!-- container -->

@endsection