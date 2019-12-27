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
                        <tr>
                            <th>تقييم المستخدمين</th>
                            <td>
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

                                <span>عدد المقيّمين {{ $roadster->ratings()->count() }} مستخدم</span>

                            </td>
                        </tr>


                    </table>
                    @auth
                        <h4>قيّم هذا المنتج<h4>

                        @if(auth()->user()->rated($roadster))
                            <div class="rating">
                                <span class="rating-star {{ auth()->user()->bookRating($roadster)->value == 5 ? 'checked' : '' }}" data-value="5"></span>
                                <span class="rating-star {{ auth()->user()->bookRating($roadster)->value == 4 ? 'checked' : '' }}" data-value="4"></span>
                                <span class="rating-star {{ auth()->user()->bookRating($roadster)->value == 3 ? 'checked' : '' }}" data-value="3"></span>
                                <span class="rating-star {{ auth()->user()->bookRating($roadster)->value == 2 ? 'checked' : '' }}" data-value="2"></span>
                                <span class="rating-star {{ auth()->user()->bookRating($roadster)->value == 1 ? 'checked' : '' }}" data-value="1"></span>
                            </div>
                        @else
                            <div class="rating">
                                <span class="rating-star" data-value="5"></span>
                                <span class="rating-star" data-value="4"></span>
                                <span class="rating-star" data-value="3"></span>
                                <span class="rating-star" data-value="2"></span>
                                <span class="rating-star" data-value="1"></span>
                            </div>
                        @endif
                    @endauth


                    <br><hr><br>

                    <div class="form-group">

             <table class="table table-striped">
                 <tr>
                     <td> التعليقات</td>
                 </tr>

                 @foreach($roadster->comments as $c)

                     <tr>
                         <td>  {{$c->comment}}
                         </td>
                     </tr>
                 @endforeach

             </table>

             <form action="/roadsters/{{$roadster->id}}" method="POST">
                 {{csrf_field()}}
                 <div class="form-group">
                     <label for="usr">التعليق:</label>
                     <textarea rows="4" cols="50"  name="comment1" class="form-control">
       </textarea>
                 </div>

                 </br>
                 <input type="submit" value="إضافة تعليق" class="btn btn-primary"/>
             </form>
         </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $('.rating-star').click(function() {
            $(this).parents('.rating').find('.rating-star').removeClass('checked');
            $(this).addClass('checked');

            var submitStars = $(this).attr('data-value');

            $.ajax({
                type: 'post',
                url: {{ $roadster->id }} + '/rate',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'value' : submitStars
                },
                success: function() {
                    alert('تمت عملية التقييم بنجاح');
                    location.reload();
                },
                error: function() {
                    alert('حدث خطأ ما');
                },
            });
        });
    </script>
@endsection
