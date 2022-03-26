<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login/auth">
        <input type="text" name="username" placeholder="username" value="<?= set_value('username') ?>">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>