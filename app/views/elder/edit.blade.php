@include('includes.head')

<script>
   $(document).ready(function() {
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
  {{ Form::model($row,array('route' => array('elder.update', $row->id),'method' => 'PUT')) }}

    @include('elder.includes.editform')
    {{ Form::submit('更新') }}

  {{ Form::close() }}

  {{ Form::open(array('url' => 'elder/' . $row->id,
  'data-confirm' => '確定刪除嗎?',
  'class' => 'pull-right')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('刪除',array('class' => 'btn btn-link'))}}
  {{ Form::close() }}
</div>
</div>