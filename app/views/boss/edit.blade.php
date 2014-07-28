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
{{ Form::model($boss,array('route' => array('boss.update', $boss->id),'method' => 'PUT')) }}


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


  {{ Form::submit('更新') }}


{{ Form::close() }}


{{ Form::open(array('url' => 'boss/' . $boss->id,
'data-confirm' => '確定刪除嗎?',
'class' => 'pull-right')) }}
  {{ Form::hidden('_method', 'DELETE') }}
  {{ Form::submit('刪除',array('class' => 'btn btn-link'))}}
{{ Form::close() }}

</div>
</div>