<head>
  @include('includes.head')
  @include('includes.header')

  <script>
     $(document).ready(function() {

     })
     </script>

</head>






<div class="container">
  <a href="{{URL::to('labor/create')}}" class="btn btn-primary">新增</a>
<table class="table">
  <tr>
    <th>姓名</th>
    <th>謢照號碼</th>
    <th>國籍</th>
    <th>電話</th>

  </tr>
  @foreach($data as $d)
  <tr>
    <td>{{$d->name}}</td>
    <td>{{$d->passport}}</td>
    <td>{{$d->nation}}</td>
    <td>{{$d->tel}}</td>

    <td>
      <a href="{{URL::to('labor/'.$d->id.'/edit')}}" class="">修改</a>
    </td>
  </tr>
  @endforeach
</table>
</div>