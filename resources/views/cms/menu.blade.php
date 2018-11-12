@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT SITE MENU</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/menu/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new link</a></p>
@if($menus)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>Menu link</th>
            <th>Last update</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-secondary">
            <td><a href="{{ url('') }}">Home</a></td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr class="table-secondary">
            <td><a href="{{ url('shop') }}">Shop</a></td>
            <td> - </td>
            <td> - </td>
        </tr>
        <tr class="table-secondary">
            <td><a href="{{ url('about') }}">About</a></td>
            <td> - </td>
            <td> - </td>
        </tr>
        @foreach($menus as $menu)
        <tr>
            
            <td><a href="{{ url($menu['url']) }}">{{ $menu['link'] }}</a></td>
            <td>{{ date('d/m/Y \a\t H:i', strtotime($menu['updated_at'])) }}</td>
            <td> 
                <a href="{{ url('cms/menu/' . $menu['id'] . '/edit') }}" class="btn btn-outline-warning"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/menu/' . $menu['id']) }}" method="POST" class="operations">
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