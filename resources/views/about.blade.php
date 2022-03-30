<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
        @foreach($tasks as $key => $task)
        <li><a href="/show/{{$key}}">{{$task}} </a></li>
    </ul>
        @endforeach

        <form action="/show" method="post">
            @csrf
            <input type="text" name="name" id="name">
            <button>Send</button>
        </form>
        @if(isset($name))
        <h1>{{$name}}</h1>
        @endif
  </body>
</html>
