<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Products'); ?></title>
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
        <?php if (!empty($products)): ?>
            <ul>
                <?php foreach ($products as $product): ?>
                    <li>
                        <a href="/product/<?php echo $product['id']; ?>">
                            <?php echo htmlspecialchars($product['name']); ?>
                        </a>
                        - $<?php echo htmlspecialchars(number_format($product['price'], 2)); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>© <?php echo date('Y'); ?> My App</p>
    </footer>
</body>
</html>