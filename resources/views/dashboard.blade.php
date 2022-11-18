
@extends('Layouts.master')<!--宣告繼承父視圖-->
@section('contect')
    @parent  <!--接受繼承父視圖的禮物-->
    <div>子視圖的內容</div> <!--填洞-->
@endsection
@section('title','儀表板')

