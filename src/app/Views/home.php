<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle ?? 'My App'); ?></title>
    <link rel="stylesheet" href="/css/style.css"> <!-- Example CSS -->
</head>
<body>
    <header>
        <h1>My Awesome Application</h1>
        <nav>
            <a href="/">Home</a> |
            <a href="/products">Products</a>
        </nav>
    </header>
    <main>
        <h2><?php echo htmlspecialchars($pageTitle); ?></h2>
        <p><?php echo htmlspecialchars($message); ?></p>
    </main>
    <footer>
        <p>© <?php echo date('Y'); ?> My App</p>
    </footer>
</body>
</html>