<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts - POS System</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <header class="header">
        <div class="container">
            <h1>Customer Accounts</h1>

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
            <h2>Customer List</h2>

            <p class="subtitle">
                Customer information stored in the POS database.
            </p>

            <table>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>

                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= $customer['full_name'] ?></td>
                        <td><?= $customer['email'] ?></td>
                        <td><?= $customer['phone'] ?></td>
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