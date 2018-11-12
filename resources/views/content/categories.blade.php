@extends('master')

@section('main_content')

<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Shop</h1><p class="lead text-muted">Music is the strongest form of Magic</p>
            </div>
            <div class="col-lg-3 text-right order-1 order-lg-2">
            <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item active">Shop</li>
            </ul>
          </div>
            
        </div>
    </div>
</section>
<main>
    <section class="categories">
        <div class="container">
            <header class="text-center">
                <h2 class="text-uppercase"><small>the best brands</small>Shop Categories</h2>
            </header>
            <div class="row text-left">
                @if($categories)
                @foreach($categories as $category)
                <div class="col-lg-4 pb-4">
                    <a href="{{ url('shop/' . $category['url']) }}">
                        @php $image = $category['image'] @endphp
                        <div style="background-image: url({{ asset('images/' . $image) }});" class="item d-flex">
                            <div class="content">
                                <h3 class="h5 title-colors">{{ $category['title'] }}</h3><span class="art-colors">{!! $category['article'] !!}</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @else
                <div class="col-md-12 text-center">
                    <p><i>No categories available</i></p>
                </div>
                @endif
            </div>
        </div>
    </section>
</main>


@endsection