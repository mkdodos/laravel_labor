@include('includes.head')
<div class="container">
<div class="col-md-6">
  {{ Form::open(array('url' => 'boss')) }}
  @include('boss.includes.editform')
  {{ Form::submit('儲存',array('class'=>'btn btn-primary')) }}
{{ Form::close() }}
</div>
</div>