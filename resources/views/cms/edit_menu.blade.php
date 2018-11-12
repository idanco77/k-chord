@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT MENU LINK</h4>
        </div>
    </div>
</div>
<div class="col-md-4">
    <form action="{{ url('cms/menu/' . $item['id']) }}" method="POST" novalidate="novalidate">
    {{ method_field('PUT') }}
    @csrf
    <input type="hidden" name="item_id" value="{{ $item['id'] }}">
    <div class="form-group">
        <label for="link">Link</label>
        <input value="{{ $item['link'] }}" type="text" name="link" class="form-control original-text" id="link">
        <span class="text-danger">{{ $errors->first('link') }}</span>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input value="{{ $item['title'] }}" type="text" name="title" class="form-control" id="title">
        <span class="text-danger">{{ $errors->first('title') }}</span>
    </div>
    <div class="form-group">
        <label for="url">Url</label>
        <input value="{{ $item['url'] }}" type="text" name="url" class="form-control target-text" id="url">
        <span class="text-danger">{{ $errors->first('url') }}</span>
    </div>
    <button type="submit" name="submit" class="btn btn-success"><i class=" mdi mdi-arrow-up-bold"></i> Update menu</button>
    <a href="{{ url('cms/menu') }}" class="btn btn-light"><i class="mdi mdi-keyboard-backspace"></i> Cancel</a>

</form>
</div>

    



</div><!-- container -->

@endsection