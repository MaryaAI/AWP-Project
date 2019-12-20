@extends('theme.default')

@section('heading')
تعديل بيانات الدراجة أو الملحقات
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>

    <div class="card mb-4 col-md-8">
        <div class="card-header text-right">
            عدّل بيانات الدراجة أو الملحقات
        </div>
        <div class="card-body">
            <form action="{{ route('roadsters.show', $roadster) }}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $roadster->name }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cover_image" class="col-md-4 col-form-label text-md-right">صورة الغلاف</label>

                    <div class="col-md-6">
                        <input id="cover_image" accept="image/*" type="file" onchange="readCoverImage(this);" class="@error('cover_image') is-invalid @enderror" name="cover_image" value="{{ old('cover_image') }}" autocomplete="cover_image">

                        @error('cover_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <img id="cover-image-thumb" class="img-fluid img-thumbnail" src="{{ asset('storage/' . $roadster->cover_image) }}">

                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">التصنيف</label>

                    <div class="col-md-6">
                        <select id="category" class="form-control" name="category">
                            <option disabled {{ $roadster->category == null ? "selected" : ""  }}>اختر تصنيفًا</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $roadster->category == $category ? "selected" : ""  }}>{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">الوصف</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ $roadster->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">السعر</label>

                    <div class="col-md-6">
                        <input id="price" type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $roadster->price }}" required autocomplete="price">

                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">عدّل</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-2"></div>
</div>
@endsection

@section('script')
<script>
    function readCoverImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#cover-image-thumb')
                .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
