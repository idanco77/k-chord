@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT SITE CONTENT</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/content/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new content</a></p>
@if($contents)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>Menu link</th>
            <th>Last update</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contents as $content)
        <tr>
            <td>{{ $content['title'] }}</td>
            <td>{{ date('d/m/Y \a\t H:i', strtotime($content['updated_at'])) }}</td>
            <td> 
                <a href="{{ url('cms/content/' . $content['id'] . '/edit') }}" class="btn btn-outline-warning"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/content/' . $content['id']) }}" method="POST" class="operations">
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