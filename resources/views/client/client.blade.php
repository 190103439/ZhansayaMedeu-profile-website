<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new client</title>
</head>
<body>
    <form method="POST" action="{{ route('add-client') }}">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="body" placeholder="body">
    <button type="submit">create</button>
    </form>
</body>
</html>