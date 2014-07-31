<head>
  @include('includes.head')
  @include('includes.header')

  <script>
     $(document).ready(function() {

     })
     </script>

</head>

<div class="container">
  <a href="{{URL::to('elder/create')}}" class="btn btn-primary">新增</a>
<table class="table">
  <tr>
    <th>姓名</th>
    <th>身份證號碼</th>
    <th>生日</th>
    <th>地址</th>

  </tr>
  @foreach($data as $d)
  <tr>
    <td>{{$d->name}}</td>
    <td>{{$d->id_num}}</td>
    <td>{{$d->birth}}</td>
    <td>{{$d->address}}</td>

    <td>
      <a href="{{URL::to('elders_labors/'.$d->id)}}" class="">被誰照顧</a>
    </td>

    <td>
      <a href="{{URL::to('elder/'.$d->id.'/edit')}}" class="">修改</a>
    </td>
  </tr>
  @endforeach
</table>
</div>