<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Accounts List</title>
</head>
<body>

<table>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?= $user['firstname'] ?></td>
        <td><?= $user['lastname'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>