@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT SITE CATEGORIES</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/categories/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new category</a></p>
@if($categories)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category image</th>
            <th>Last update</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category['title'] }}</td>
            <td><img src="{{ asset('images/' . $category['image']) }}" alt="{{ $category['title'] }}" width="80"></td>
            <td>{{ date('d/m/Y \a\t H:i', strtotime($category['updated_at'])) }}</td>
            <td> 
                <a href="{{ url('cms/categories/' . $category['id'] . '/edit') }}" class="btn btn-outline-warning"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/categories/' . $category['id']) }}" method="POST" class="operations">
                    {{ @method_field('DELETE')}}
                    <a href="#" class="btn btn-outline-danger cms-delete-item"><i class="mdi mdi-delete-variant"></i> Delete</a>
                    @csrf
                </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endif




</div><!-- container -->

@endsection