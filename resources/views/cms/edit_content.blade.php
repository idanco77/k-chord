@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT CONTENT</h4>
        </div>
    </div>
</div>
<div class="col-md-8">
        <form action="{{ url('cms/content/' . $item['id']) }}" method="POST" novalidate="novalidate">
    {{ method_field('PUT') }}
    @csrf
    <div class="form-group">
        <label for="menu-link">Menu link</label>
        <select name="menu_id" id="menu-link" class="form-control">
            <option value="">Choose link...</option>
            @foreach($menus as $menu)
            <option @if($item['menu_id'] == $menu['id']) selected="selected" @endif value="{{ $menu['id'] }}">{{ $menu['link'] }}</option>
            @endforeach
        </select>
        <span class="text-danger">{{ $errors->first('menu_id') }}</span>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input value="{{ $item['title'] }}" type="text" name="title" class="form-control" id="title">
        <span class="text-danger">{{ $errors->first('title') }}</span>
    </div>
    <div class="form-group">
        <label for="article">Article</label>
        <textarea name="article" id="article" class="form-control">{{ $item['article'] }}</textarea>
        <span class="text-danger">{{ $errors->first('article') }}</span>
    </div>
    
    <button type="submit" name="submit" class="btn btn-success"><i class=" mdi mdi-arrow-up-bold"></i> Update content</button>
    <a href="{{ url('cms/content') }}" class="btn btn-light"><i class="mdi mdi-keyboard-backspace"></i> Cancel</a>

</form>
</div>

    



</div><!-- container -->

@endsection