@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">المعرض</div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4"></div>

                        <form class="form-inline col-md-6" action="{{ route('search') }}" method="GET">
                            @csrf
                            <input type="text" class="form-control mx-sm-3 mb-2" name="term">
                            <button type="submit" class="btn btn-secondary mb-2">ابحث</button>
                        </form>

                        <div class="col-md-2"></div>
                    </div>

                    <hr>

                    <br>


                    <br>

                    <br>

                    <div class="row">
                      @if($roadsters->count())
                        @foreach($roadsters as $roadster)

                            <div class="col-lg-3 col-md-4 col-6" style="margin-bottom:10px">
                                <div class="d-block mb-4 h-100 border rounded" style="padding:10px">
                            <a href="{{ route('roadsters.show', $roadster->id) }}" style="color:#555555">
                                <img class="img-fluid img-thumbnail" src="{{ url('uploads/' . $roadster->cover_image) }}" alt="">

                                <b>{{ $roadster->name }}</b>
                            </a>

                            <span class="score">
                                <div class="score-wrap">
                                    <span class="stars-active" style="width:{{ $roadster->rate()*20 }}%">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>

                                    <span class="stars-inactive">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </span>


                            @if($roadster->category != NULL)
                                                         <br><a style="color:#525252" href="{{ route('categories.show', $roadster->category) }}">  التصنيف: {{ $roadster->category->name }}</a>
                                                        @endif

                                        <br><b>السعر: </b>{{ $roadster->price }} $

                                        @auth
                                        <form method="POST" action="{{ route('cart.add') }}">
                                            @csrf
                                            <input name="id" type="hidden" value="{{ $roadster->id }}">
                                            <input class="form-control" name="quantity" type="number" value="1" min="1" max="{{ $roadster->number_of_copies }}" style="width:40%; float:right" required>
                                            <button type="submit" class="btn btn-primary" style="margin-right: 10px"> أضف <i class="fas fa-cart-plus"></i></button>
                                        </form>
                                    @endauth
                                        <br>



                                    </div>

                                </div>


                        @endforeach


                            <div class="col-12">{{ $roadsters->links() }}</div>

                        @else
                            <h3 style="margin:0 auto">لا نتائج</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
