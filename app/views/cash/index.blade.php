<head>
  @include('includes.head')
  @include('includes.header')

  <script>
     $(document).ready(function() {

     })
     </script>

</head>






<div class="container">
  <a href="{{URL::to('cash/create')}}" class="btn btn-primary">新增</a>
<a href="{{URL::to('cash/test')}}" class="btn btn-success pull-right">輸出excel</a>
<table class="table">
  <tr><th>日期</th><th>項目</th><th>摘要</th>
    <th>金額</th>
    <th>稅額</th>
    <th>功能</th></tr>
  @foreach($data as $d)
  <tr>
    <td>{{$d->spend_date}}</td>
    <td>{{$d->item}}</td>
    <td>{{$d->note}}</td>
    <td>{{$d->amt}}</td>
    <td>{{$d->tax}}</td>
    <td>

      <a href="{{URL::to('cash/'.$d->id.'/edit')}}" class="">修改</a>




    </td>
  </tr>
  @endforeach
</table>
</div>