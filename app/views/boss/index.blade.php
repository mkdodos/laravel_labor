<head>
  @include('includes.head')
  @include('includes.header')

  <script>
     $(document).ready(function() {

     })
     </script>

</head>






<div class="container">
  <a href="{{URL::to('boss/create')}}" class="btn btn-primary">新增</a>
<a href="{{URL::to('cash/test')}}" class="btn btn-success pull-right">輸出excel</a>
<table class="table">
  <tr>
    <th>姓名</th>
    <th>身份證字號</th>
    <th>電話</th></tr>
  @foreach($data as $d)
  <tr>
    <td>{{$d->name}}</td>
    <td>{{$d->boss_id}}</td>
    <td>{{$d->tel}}</td>
    <td>
      <a href="{{URL::to('boss/'.$d->id.'/edit')}}" class="">修改</a>
    </td>
  </tr>
  @endforeach
</table>
</div>