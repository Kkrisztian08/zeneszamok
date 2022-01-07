<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Zenezsámok</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Singer</th>
            <th>Length (mp-ben)</th>
        </tr>
        @foreach($songs as $song)
            <tr>
                <td>{{ $song->title }}</td>
                <td>{{ $song->singer }}</td>
                <td>{{ $song->length }} mp</td>
            </tr>
        @endforeach
    </table>
</body>
</html>