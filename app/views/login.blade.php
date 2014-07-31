<!doctype html>
<html>
<head>
  <title>登入表單</title>
</head>
<body>

  {{ Form::open(array('url' => 'login')) }}
    <h1>登入表單</h1>

    <p>
      {{ Form::label('username', '帳號') }}
      {{ Form::text('username', Input::old('username'), array('placeholder' => 'test')) }}
    </p>

    <p>
      {{ Form::label('password', '密碼') }}
      {{ Form::password('password') }}
    </p>

    <p>{{ Form::submit('登入') }}</p>
  {{ Form::close() }}

</body>
</html>