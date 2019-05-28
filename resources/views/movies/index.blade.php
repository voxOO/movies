<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <ul>
              
                @foreach ($movies as $movie) 
                    <li>
                       <a href="{{'/movies/'. $movie->id}}">{{$movie->title}}</a>
                       <p>{{$movie->storyline}}</p>
                    </li>
                @endforeach
            
        </ul>
</body>
</html>
