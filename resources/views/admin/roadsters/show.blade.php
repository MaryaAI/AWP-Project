@extends('theme.default')

@section('heading')
عرض كتاب
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>

    <div class="card mb-4 col-md-8">
        <div class="card-header text-right">
            عرض بيانات الدراجة أو المنتج
        </div>
        <div class="card-body">
            <table class="table table-stribed">
                <tr>
                    <th>اسم المنتج</th>
                    <td class="lead"><b>{{ $roadster->name }}</b></td>
                </tr>

                <tr>
                    <th>صورة الغلاف</th>
                    <td><img class="img-fluid img-thumbnail" src="{{ asset('storage/' . $roadster->cover_image) }}"></td>
                </tr>
                @if($roadster->category)
                    <tr>
                        <th>التصنيف</th>
                        <td>{{ $roadster->category->name }}</td>
                    </tr>
                @endif

                @if($roadster->description)
                    <tr>
                        <th>الوصف</th>
                        <td>{{ $roadster->description }}</td>
                    </tr>
                @endif

                <tr>
                    <th>السعر</th>
                    <td>{{ $roadster->price }} $</td>
                </tr>

            </table>
            <a class="btn btn-primary btn-sm" href="{{ route('roadsters.edit', $roadster) }}"><i class="fa fa-edit"></i> تعديل</a>
            <form method="POST" action="{{ route('roadsters.show', $roadster) }}" style="display:inline-block">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')"><i class="fa fa-trash"></i> حذف</button>
            </form>
        </div>
    </div>

    <div class="col-md-2"></div>
</div>
@endsection
