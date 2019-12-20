@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">عربة التسوق</div>

                <div class="card-body">

                    @if($items->count())

                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">الاسم</th>
                                <th scope="col">السعر</th>
                                <th scope="col">الكمية</th>
                                <th scope="col">السعر الكلي</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        @php($totalPrice = 0)
                        @foreach($items as $item)


                            <tbody>
                                <tr>
                                    <th scope="row">{{ $item->title }}</th>
                                    <td>{{ $item->price }} $</td>

                                    <td>
                                        <form style="float:left; margin: auto 5px" method="post" action="{{ route('cart.remove_all', $item->id) }}">
                                            @csrf
                                            <button class="btn btn-danger btn-sm" type="submit">أزل الكل</button>
                                        </form>

                                        <form style="float:left; margin: auto 5px" method="post" action="{{ route('cart.remove_one', $item->id) }}">
                                            @csrf
                                            <button class="btn btn-warning btn-sm" type="submit">أزل واحدًا</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                    <h4>المجموع النهائي: {{ $totalPrice }} $</h4>

                    @else

                    <h1>لا يوجد شيء في العربة</h1>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
