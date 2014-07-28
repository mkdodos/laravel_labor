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
{{ Form::model($labor,array('route' => array('labor.update', $labor->id),'method' => 'PUT')) }}

@include('labor.includes.editform')
  {{ Form::submit('更新') }}
{{ Form::close() }}


{{ Form::open(array('url' => 'labor/' . $labor->id,
'data-confirm' => '確定刪除嗎?',
'class' => 'pull-right')) }}
  {{ Form::hidden('_method', 'DELETE') }}
  {{ Form::submit('刪除',array('class' => 'btn btn-link'))}}
{{ Form::close() }}

</div>
</div>