<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Product Details'); ?></title>
    <link rel="stylesheet" href="/css/style.css">
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
        <?php if (isset($product)): ?>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($product['name']); ?></p>
            <p><strong>Price:</strong> $<?php echo htmlspecialchars(number_format($product['price'], 2)); ?></p>
            <p><strong>ID:</strong> <?php echo htmlspecialchars($product['id']); ?></p>
        <?php else: ?>
            <p>Product details not available.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>© <?php echo date('Y'); ?> My App</p>
    </footer>
</body>
</html>