@include('includes.head')


<script>
   $(document).ready(function() {
      var mydp = $('#spend_date_editor').datepicker({
             language: "zh-TW"
         }).on('changeDate', function(ev) {
             mydp.hide();
         }).data('datepicker');
   })
 </script>



<div class="container">

<div class="col-md-6">
  {{ Form::open(array('url' => 'cash')) }}
  <div class="form-group">
    {{ Form::label('spend_date', '日期') }}
    {{ Form::text('spend_date',null,
        array(
        'id'=>'spend_date_editor',
        'data-date-format'=>'yyyy-mm-dd',
        'class' => 'form-control'
    )) }}
  </div>
  <div class="form-group">
    {{ Form::label('item', '項目') }}
    {{ Form::text('item',null,
        array(
        'class' => 'form-control'
    )) }}
  </div>
  <div class="form-group">
    {{ Form::label('note', '摘要') }}
    {{ Form::text('note',null,
        array(
        'class' => 'form-control'
    )) }}
  </div>
  <div class="form-group">
    {{ Form::label('amt', '金額') }}
    {{ Form::text('amt',null,
        array(
        'class' => 'form-control'
    )) }}
  </div>
  <div class="form-group">
    {{ Form::label('tax', '稅額') }}
    {{ Form::text('tax',null,
        array(
        'class' => 'form-control'
    )) }}
  </div>
  {{ Form::submit('儲存',array('class'=>'btn btn-primary')) }}
{{ Form::close() }}
</div>
</div>