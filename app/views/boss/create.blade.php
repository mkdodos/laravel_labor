@include('includes.head')




<div class="container">

<div class="col-md-6">
  {{ Form::open(array('url' => 'boss')) }}

  <div class="form-group">
    {{ Form::label('name', '姓名') }}
    {{ Form::text('name',null,
        array(
        'class' => 'form-control'
    )) }}
  </div>
  <div class="form-group">
    {{ Form::label('boss_id', '身份證') }}
    {{ Form::text('boss_id',null,
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

  {{ Form::submit('儲存',array('class'=>'btn btn-primary')) }}
{{ Form::close() }}
</div>
</div>