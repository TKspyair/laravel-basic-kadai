<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎</title>
</head>

<body>
  <h1>投稿一覧</h1>
  <table>
    <tr>
      <th>タイトル</tr>
      <th>本文</th>
    @foreach($posts as $post)
      <tr>
        <td>{{ $posts->title}}</td>
        <td>{{ $posts->content}}</td>
      </tr>            
      @endforeach       

  
</body>

</html>