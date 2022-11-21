@extends('Layouts.grid_layout')

<!DOCTYPE html>
<html lang="en" >
@section('header')
<head>
      <meta charset="UTF-8">
      <title>Penny's Homework</title>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="{{asset('navbar/style.css')}}">
</head>
<body>
    <header class="navbar navbar-expand-custom navbar-mainbg" style="line-height:40px  " >
      <a class="navbar-brand navbar-logo"  href="#" style="text-size-adjust:auto ">Penny's Homework</a>
      <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
      <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse"  id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <div class="hori-selector"  ><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
            </li>
        </ul>
      </div>
    </header>


  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="{{asset('navbar/script.js')}}"></script>
@endsection
</body>
</html>

