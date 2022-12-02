<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


<H1>Edit頁面</H1>
{{-- {!! Form::open(['action'=>'App\Http\Controllers\PostController@store','method'=>'POST','files'=>true]) !!} --}}<!--指向要去的action-->

{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}
  @include('posts._form')

{!! Form::close() !!}
@include('posts._error')


</body>
</html>
