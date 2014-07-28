<div class="form-group">
  {{ Form::label('name', '姓名') }}
  {{ Form::text('name',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('id_num', '身份證') }}
  {{ Form::text('id_num',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('tel', '電話') }}
  {{ Form::text('tel',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
