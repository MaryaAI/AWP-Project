@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تفاصيل  القطعة</div>

                <div class="card-body">
                    <table id="section-to-print" class="table table-striped">
                        <tr>
                            <th>اسم القطعة</th>
                            <td><h1>{{ $roadster->name }}</h1></td>
                        </tr>



                        <tr>
                            <th>صورة القطعة</th>
                            <td><img class="img-thumbnail" src="{{ url('uploads/' . $roadster->cover_image) }}" alt="{{ $roadster->name }}"></td>
                        </tr>




                        @if($roadster->description != NULL)
                            <tr>
                                <th>الوصف</th>
                                <td>{{ $roadster->description }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th>الصانع</th>
                            <td>تيويتا</td>
                        </tr>
                        <tr>
                            <th>السعر</th>
                            <td>{{ $roadster->price }} $</td>
                        </tr>
                    </table>

                    <br><hr><br>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
