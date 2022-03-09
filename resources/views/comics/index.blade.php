<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
<div class="comic-card btn-main-s">
        <div class="card-img">
          <a href="{{ route(comics.show, $comic->id) }}" class="btn btn-link"><img src="{{$comic['thumb']}}" alt=""></a>            
        </div>
          
        <div class="title">{{$comic['series']}}</div>
      </div>
</body>

</html>