
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
        width: 500px;
      }
      ul {
            /* padding: 20px; */
          margin: 80px;
      }
   </style>
   <ul>
     @foreach ($pics as $item)
      @if($loop->iteration == 1 or $loop->iteration == 4)
        <ul>
      @endif
         <img src="images\{{$item}}.jpg" alt="Picture" >
      @if($loop->iteration == 3 or $loop->iteration == 6)
        </ul>
      @endif
     @endforeach
   </ul>
@endsection

