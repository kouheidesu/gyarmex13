<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>タイトル</h1>
  <table>
    @foreach ($data as $item)
      <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['email']}}</td>
      </tr>
    @endforeach
  </table>
</body>

</html>
