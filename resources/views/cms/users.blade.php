@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT SITE USERS</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/users/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new user</a></p>
@if($users)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>User name</th>
            <th>User image</th>
            <th>User email</th>
            <th>Address</th>
            <th>Created at</th>
            <th>User role</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td><img src="{{ asset('images/' . $user->image) }}" alt="{{ $user->name }}" width="80"></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ date('d/m/Y \a\t H:i', strtotime($user->created_at)) }}</td>
            <td>@if($user->rid == 8) Administrator @else User @endif</td>
            <td> 
                <a href="{{ url('cms/users/' . $user->id . '/edit') }}" class="btn btn-outline-warning mb-1 btn-block"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/users/' . $user->id) }}" method="POST" class="operations">
                    {{ @method_field('DELETE')}}
                    <a href="#" class="btn btn-outline-danger cms-delete-item btn-block"><i class="mdi mdi-delete-variant"></i> Delete</a>
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