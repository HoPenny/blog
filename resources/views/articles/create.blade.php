

{!! Form::open(['url'=>'articles','method'=>'POST','files'=>true]) !!}
  {!! Form::label('subject', '主旨', ['class' => 'myclass','style'=>'color:green;']) !!}
  {!! Form::text('subject', '123456',['style'=>'color:green;']) !!}<br>
  {{-- @if ($errors->has('title'))
    <div style="color:red">{{ $errors->first('title')}}</div>
  @endif --}}
  {!! Form::label('content', '內文') !!}
  {!! Form::textarea('content', '1254356', ['cols' =>60 , 'rows'=>5]) !!}<br>
   {!! Form::label('cgy_id', 'cgy_id') !!}
  {!! Form::number('cgy_id', null, []) !!}<br>
  {{-- {!! Form::label('desc', '內文') !!}
  {!! Form::textarea('desc', null, ['cols' =>60 , 'rows'=>5]) !!}<br> --}}
  {{-- {!! Form::select('category', $datas ,$data, ['placeholder' => '請選擇類別']) !!}<br> --}}
  {!! Form::label('enabled', '狀態') !!}
  {!! Form::radio('enabled', 1, true) !!}是
  {!! Form::radio('enabled', 0, false) !!}否<br>
  {!! Form::label('sort', '排序', []) !!}
  {!! Form::number('sort', null, ['min'=>0 , 'max'=>10]) !!}<br><br>
  {!! Form::label('enable_at', '日期', []) !!}
  {!! Form::date('enable_at',today(), []) !!}<br>
  {{-- {!! Form::label('tags[]', 'News') !!}
  {!! Form::checkbox('tags[]', 'news', false) !!}news
  {!! Form::checkbox('tags[]', 'skill', false) !!}skill
  {!! Form::checkbox('tags[]', 'like', false) !!}like<br> --}}
  {!! Form::label('pic', '圖片', []) !!}
  {!! Form::file('pic', []) !!}<br><br>
  {!! Form::submit('儲存', []) !!}
  {!! Form::reset('重置', []) !!}
{!! Form::close() !!}
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
