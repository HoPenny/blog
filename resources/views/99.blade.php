
@extends('Layouts.nav')
{{-- @section('contact')
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
</table>

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
@endsection --}}
@section('image')

   <style >
      img {
        border: 1px solid #ddd;
        border-radius: 4px;
         padding: 25px;
        width: 600px;
      }
   </style>
   @php
      $pics[] = $p1;
      $pics[] = $p2;
      $pics[] = $p3;
   @endphp

     @foreach ($pics as $item)
      <li style="width:500px;height:400px;position:relative;">
         <img src="images\{{$item}}.jpg" alt="Picture" >
      </li>
    @endforeach
   </ul>
@endsection

