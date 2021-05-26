<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>Todo List</h1>
    <div class="container-edit">
      <form action="/" method="POST">
        @csrf
        <!-- エラー表示 -->
        @if($errors->has("content"))
        <p>{{$errors->first("content")}}</p>
        @endif
        <input type="text" name="content" value="{{old('content')}}">
        <input type="submit" name="newAdd" value="追加">
      </form>
    </div>
    <div class="container-edit">
      <table>
        <thead>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
        </thead>
      </table>
      <tbody>
        @foreach($todos as $todo)
        <tr>
          <td>{{$todo->created_at}}</td>
          <td><input type="text" name="content" value="{{$todo->content}}"></td>
          <td>編集</td>
          <td>>削除</td>
        </tr>
        @endforeach
      </tbody>
    </div>
  </div>
</body>

</html>