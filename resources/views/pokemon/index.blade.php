<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="{{ asset('logo.png') }}" alt="Application Logo" style="width: 200px; display: block; margin-left: auto;  margin-right: auto;">
    <h1>Pokemon List</h1>
    <ul>
        <table style="width:100%; border: 2px solid black; text-align: center; ">
            <tr style="border: 2px solid black;">
                <th>Name</th>
                <th>Base Experience</th>
                <th>Weight</th>
                <th>image</th>
            </tr>
            @foreach ($pokemon as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->base_experience }}</td>
                <td>{{ $p->weight }}</td>
                <td><img src="{{ $p->image_url }}" alt="{{ $p->name }}" width="100"></td>
            </tr>
            @endforeach
    
</body>
</html>