@include('includes.head')


<script>
   $(document).ready(function() {
      var mydp = $('#spend_date_editor').datepicker({
             language: "zh-TW"
         }).on('changeDate', function(ev) {
             mydp.hide();
         }).data('datepicker');


         // Confirm deleting resources
         $("form[data-confirm]").submit(function() {
             if ( ! confirm($(this).attr("data-confirm"))) {
                     return false;
             }
         });


   })
 </script>

<div class="container">

<div class="col-md-6">
{{ Form::model($cash,array('route' => array('cash.update', $cash->id),'method' => 'PUT')) }}
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
  {{ Form::submit('更新') }}






{{ Form::close() }}


{{ Form::open(array('url' => 'cash/' . $cash->id,
'data-confirm' => '確定刪除嗎?',
'class' => 'pull-right')) }}
  {{ Form::hidden('_method', 'DELETE') }}
  {{ Form::submit('刪除',array('class' => 'btn btn-link'))}}
{{ Form::close() }}

</div>
</div>