<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>notes</title>
</head>
<body>
    <h1> notes </h1>
    <a href="{{ route('note.create') }}">creat note </a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">tittle</th>
      <th scope="col">content</th>
      <th scope="col">created at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($notes as $note)
    <tr>
      <td >{{ $note->id }}</td>
      <td>{{ $note->tittle }}</td>
      <td>{{ $note->content }}</td>
 <td>{{ $note->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>  
</body>
</html>