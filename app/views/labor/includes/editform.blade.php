<div class="form-group">
  {{ Form::label('name', '姓名') }}
  {{ Form::text('name',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('passport', '謢照號碼') }}
  {{ Form::text('passport',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('nation', '國籍') }}
  {{ Form::text('nation',null,
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
