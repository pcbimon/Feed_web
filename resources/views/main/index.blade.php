<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
  @foreach ($users as $user)
    <li>{{$user->email}}</a></li>
  @endforeach
</ul>
  </body>
</html>
