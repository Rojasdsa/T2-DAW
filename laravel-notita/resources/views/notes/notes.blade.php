a
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Notes</p>
    @foreach ($notes as $note)
        <tr>
            <td>{{ $note->title }}</td><br>
            <td>{{ $note->text }}</td>
            <td><a href="notes/{{ $note->id }}"></a></td>
        </tr>
    @endforeach
</body>

</html>
