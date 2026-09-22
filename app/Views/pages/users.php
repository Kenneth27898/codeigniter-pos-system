<!DOCTYPE html>
<html>
<head>
    <title>User Accounts - POS System</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <header class="header">
        <div class="container">
            <h1>User Accounts</h1>

            <nav class="nav">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/customers">Customers</a>
                <a href="/users">Users</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="card">
            <h2>User List</h2>

            <p class="subtitle">
                User account information stored in the POS database.
            </p>

            <table>
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
        </section>
    </main>

    <footer class="footer">
        <p>POS System</p>
    </footer>

</body>
</html>