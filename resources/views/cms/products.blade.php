@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">SITE PRODUCTS</h4>
        </div>
    </div>
</div>

<p><a href="{{ url('cms/products/create') }}" class="btn btn-outline-warning"><i class="mdi mdi-plus-circle-outline"></i> Add new product</a></p>
@if($products)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Product name</th>
            <th>Category</th>
            <th>Product image</th>
            <th>Stock</th>
            <th>Last update</th>
            <th>Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $val => $product)
        <tr>
            <td>{{ $val+1 }}</td>
            <td><a href="{{ url('shop/' . $product->curl . '/' . $product->url) }}" target="_blank">{{ $product->title }}</a></td>
            <td>{{ $product->ctitle }}</td>
            <td><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" width="80"></td>
            
                @if($product->stock == 0)
                <td class="out-of-stock">Out of stock</td>
                @else
                <td>{{ $product->stock }}</td>
                @endif
            
            
            <td>{{ date('d/m/Y \a\t H:i', strtotime($product->updated_at)) }}</td>
            <td> 
                <a href="{{ url('cms/products/' . $product->id . '/edit') }}" class="btn btn-outline-warning mb-1 btn-block"><i class="mdi mdi-lead-pencil"></i> Edit</a>
                <form action="{{ url('cms/products/' . $product->id) }}" method="POST" class="operations">
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