<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/my" method="POST">
    @csrf
    <p>cmd: <input type="text" name="cmd" /></p>
    <input type="submit"  name="submit" value="Отправить">
</form>
</body>
</html>
