@extends('master')

@section('main_content')

<!-- Hero Section-->
@if($contents)
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>{{ $contents[0]->mtitle }}</h1>
            </div>
             <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item active">{{ $contents[0]->mtitle }}</li>
            </ul>
          </div>
        </div>
    </div>
</section>
<!-- text page-->
<section class="padding-small">
    <div class="container">
        @foreach($contents as $content)
        <div class="row">
            <div class="col-xl-8 col-lg-10">
                <div class="text-content"> 
                    <h2>{{ $content->title }}</h2>
                    <blockquote class="blockquote blockquote-primary">{!! $content->article !!}</blockquote>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


@endif

@endsection