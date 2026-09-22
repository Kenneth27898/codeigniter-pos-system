<!DOCTYPE html>
<html>
<head>
    <title>POS System</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <header class="header">
        <div class="container">
            <h1>Point-of-Sale System</h1>

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
            <h2>Welcome</h2>

            <p class="subtitle">
                Welcome to our Point-of-Sale System.
                This system provides simple access to customer and user account information.
            </p>

            <a href="/customers" class="button">View Customers</a>
        </section>
    </main>

    <footer class="footer">
        <p>POS System</p>
    </footer>

</body>
</html>