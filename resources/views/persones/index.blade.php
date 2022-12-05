<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class="table table-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  @foreach($persone as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->size}}</td>
      <td><a class="btn btn-primary" href="{{route('persone.edit',['id'=>$item->id])}}">Update</a></td>
      <td class="btn btn-danger">
        <form action="{{route('persone.destroy',['id'=>$item->id])}}"" method="post">
            @csrf
            @method('DELETE')
        <input type="submit" value="submit">
      </form></td>
    </tr>
   @endforeach
  </tbody>
</table>
</body>
</html>