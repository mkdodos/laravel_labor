<script>
   $(document).ready(function() {
      var mydp = $('#birth_editor').datepicker({
             language: "zh-TW"
         }).on('changeDate', function(ev) {
             mydp.hide();
         }).data('datepicker');
   })
 </script>

<div class="form-group">
  {{ Form::label('name', '姓名') }}
  {{ Form::text('name',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('id_num', '身份證號碼') }}
  {{ Form::text('id_num',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('birth', '生日') }}
  {{ Form::text('birth',null,
      array(
      'id' => 'birth_editor',
      'data-date-format' => 'yyyy-mm-dd',
      'class' => 'form-control'
  )) }}
</div>
<div class="form-group">
  {{ Form::label('address', '地址') }}
  {{ Form::text('address',null,
      array(
      'class' => 'form-control'
  )) }}
</div>
