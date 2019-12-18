@extends('theme.default')

@section('head')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('heading')
عرض المنتجات
@endsection

@section('content')
<a class="btn btn-primary" href="{{ route('roadsters.create') }}"><i class="fas fa-plus"></i>  أضف منتجًا جديدًا</a>
<hr>
<div class="row">
    <div class="col-md-12">
        <table id="books-table" class="table table-stribed text-right" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>اسم المنتج</th>
                    <th>التصنيف</th>
                    <th>السعر</th>
                    <th>خيارات</th>
                </tr>
            </thead>

            <tbody>
                @foreach($roadsters as $roadster)
                    <tr>
                        <td><a href="{{ route('roadsters.show', $roadster) }}">{{ $roadster->name }}</a></td>
                        <td>{{ $roadster->category != null ? $roadster->category->name : '' }}</td>

                        <td>{{ $roadster->price }}$</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('roadsters.edit', $roadster) }}"><i class="fa fa-edit"></i> تعديل</a>
                            <form method="POST" action="{{ route('roadsters.show', $roadster) }}" style="display:inline-block">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')"><i class="fa fa-trash"></i> حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

@section('script')
<!-- Page level plugins -->
<script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#books-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
            }
        });
    });
</script>
@endsection
