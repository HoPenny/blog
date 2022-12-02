<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>


<H1>我的第一個頁面</H1>
{{-- {!! Form::open(['action'=>'App\Http\Controllers\PostController@store','method'=>'POST','files'=>true]) !!} --}}<!--指向要去的action-->

  {!! Form::label('title', '標題', ['class' => 'myclass','style'=>'color:green;']) !!}
  {!! Form::text('title', null,['style'=>'color:green;']) !!}<br>
  @if ($errors->has('title'))
    <div style="color:red">{{ $errors->first('title')}}</div>
  @endif

  {!! Form::hidden('hid', '隱藏欄位') !!}
  {!! Form::label('contact', '內文') !!}
  {!! Form::textarea('contact', 'L Size', ['cols' =>60 , 'rows'=>5]) !!}<br>
  {!! Form::label('sex', '狀態') !!}
  {!! Form::radio('sex', 1, true) !!}是
  {!! Form::radio('sex', 01, false) !!}否<br>
  {!! Form::label('interest[]', '興趣') !!}
  {!! Form::checkbox('interest[]', '吃', false) !!}吃
  {!! Form::checkbox('interest[]', '喝', false) !!}喝
  {!! Form::checkbox('interest[]', '玩', false) !!}玩
  {!! Form::checkbox('interest[]', '樂', false) !!}樂<br>
  {!! Form::label('vaccine', '注射疫苗次數', []) !!}
  {!! Form::number('vaccine', null, ['min'=>0 , 'max'=>100]) !!}<br>
  {!! Form::select('mode', ['AZ'=>'AZ','Moderna'=>'莫德納','BNT'=>'BNT'],'AZ', ['placeholder' => '選擇疫苗種類']) !!}<br>
  {!! Form::select('mode', ['疫苗'=>['AZ'=>'AZ','Moderna'=>'莫德納','BNT'=>'BNT'],'確診'=>['1'=>'第一次','more'=>'多次']],'BNT', ['placeholder' => '選擇疫苗種類']) !!}<br>
  {!! Form::select('kind', $kinds,$kind, ['placeholder' => '選擇用餐時段']) !!}<br>
  {!! Form::label('price', '年次', []) !!}
  {!! Form::number('price', 60, ['min'=>20 , 'max'=>111]) !!}<br>
  {!! Form::label('pwd', '密碼') !!}
  {!! Form::password('pwd') !!}<br>
  {!! Form::label('email', '信箱', []) !!}
  {!! Form::email('email',null,[]) !!}<br>
  {!! Form::label('date', '日期', []) !!}
  {!! Form::date('date',  null,[]) !!}<br>
  {!! Form::label('pic', '上傳照片', []) !!}
  {!! Form::file('pic', []) !!}<br>

  {!! Form::submit('儲存', []) !!}
  {!! Form::reset('重置', []) !!}


</body>
</html>
