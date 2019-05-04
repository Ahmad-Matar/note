<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>

<form action = "{{ route('note.store') }}" method='post'>
{{ csrf_field() }}
    <h1>my notes</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">tittle</label>
    <input type="text" name="tittle" class="form-control" id="exampleFormControlInput1" placeholder="tittle">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">content</label>
    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input type="submit" value="add note"/>
</form>
</body>

</html>