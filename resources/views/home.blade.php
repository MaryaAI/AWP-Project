@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                                            <div class="col-md-4"></div>

                                            <form class="form-inline col-md-6" action="{{ route('search') }}" method="GET">
                                                @csrf
                                                <input type="text" class="form-control mx-sm-3 mb-2" name="term">
                                                <button type="submit" class="btn btn-secondary mb-2">ابحث</button>
                                            </form>

                                            <div class="col-md-2"></div>
                                        </div>

                    <div class="row">
                      @if($roadsters->count())
                        @foreach($roadsters as $roadster)

                            <div class="col-lg-3 col-md-4 col-6" style="margin-bottom:10px">
                                <div class="d-block mb-4 h-100 border rounded" style="padding:10px">
                            <a href="{{ route('roadsters.show', $roadster->id) }}" style="color:#555555">
                                <img class="img-fluid img-thumbnail" src="{{ url('uploads/' . $roadster->cover_image) }}" alt="">

                                <b>{{ $roadster->name }}</b>
                            </a>


                            @if($roadster->category != NULL)
                                                         <br><a style="color:#525252" href="{{ route('categories.show', $roadster->category) }}">  التصنيف: {{ $roadster->category->name }}</a>
                                                        @endif

                                        <br><b>السعر: </b>{{ $roadster->price }} $


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
