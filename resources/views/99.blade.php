use illuminate\Support\Arr;
use illuminate\Support\Collection;
@extends('Layouts.nav')
@section('contact')
FOR寫法:
 <table  border="1"  style="align:center border-collapse: collapse " >
  {{-- <tr>
    <th data-url="http://A.test">A</th>
    <th data-url="http://B.test">B</th>
  </tr>
  <tr>
    <td data-url="http://1.test">1</td>
    <td data-url="http://2.test">2</td>
  </tr>
</table>--}}

  @for( $i = 0 ; $i<10 ; $i++ )
      <tr>
        @for( $j = 0 ; $j<10 ; $j++ )
            <td>
               &emsp;{{$i}} * {{$j}} = {{$i * $j}}&emsp;
            </td>
        @endfor
      </tr>
  @endfor
  </table>
  <?php
  $arr = [1,2,3,4,5,6,7,8,9];
  ?>
  FOREACH寫法:
   <table border="1"  style="align:center border-collapse: collapse">
      @foreach ($arr as $item)
        <tr>
        @foreach ($arr as $item1)
            <td>
               &emsp;{{$item}} * {{$item1}} = {{$item * $item1}}&emsp;
            </td>
       @endforeach
      </tr>
      @endforeach
   </table>

@endsection
@section('image')
   <style >
      img {
        border: 1px solid #ddd;
        border-radius: 4px;
        /* padding: 25px; */
        width: 800px;
      }
   </style>
   <div style="width:500px;height:400px;border:1px solid;position:relative;">
      <img src="images\istockphoto.jpg" alt="Snowflake" >
   </div>
@endsection

