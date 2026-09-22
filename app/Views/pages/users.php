<!DOCTYPE html>
<html>
<head>
    <title>User Accounts - POS System</title>
</head>
<body>

    <h1>User Accounts</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username'] ?></td>
<td><?= $user['full_name'] ?></td>
<td><?= $user['created_at'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <br>

    <nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customers</a> |
    <a href="/users">Users</a>
</nav>

</body>
</html>