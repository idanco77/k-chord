@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT ADS</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/ads/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new ad</a></p>
@if($ads)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Updated at</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ads as $ad)
        <tr>
            <td> <a href="{{ $ad['url'] }}" target="_blank">{{ $ad['title'] }}</a> </td>
            <td><img src="{{ asset('images/' . $ad['image']) }}" alt="{{ $ad['title'] }}" width="400"></td>
           
            <td>{{ date('d/m/Y \a\t H:i', strtotime($ad['updated_at'])) }}</td>
            <td> 
                <a href="{{ url('cms/ads/' . $ad['id'] . '/edit') }}" class="btn btn-outline-warning mb-1 btn-block"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/ads/' . $ad['id']) }}" method="POST" class="operations">
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