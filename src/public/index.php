<?php
declare(strict_types=1);

echo "heelo world";
$host = 'db';
$user = 'root';
$pass = 'cod31gn1t3';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!";


// Autoload Composer dependencies
require __DIR__ . '/../vendor/autoload.php';

// (Optional: Load .env variables if you use them for app config beyond Docker Compose)
// Example with phpdotenv:
// if (file_exists(__DIR__ . '/../../.env')) { // Assuming .env is in project root
//    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
//    $dotenv->load();
// }


// Initialize the router
$router = new \Bramus\Router\Router();

// Define namespace for controllers
$controllerNamespace = 'App\\Controllers\\';

// Define routes
$router->get('/', $controllerNamespace . 'HomeController@index');
$router->get('/products', $controllerNamespace . 'ProductController@listAll');
$router->get('/product/(\d+)', $controllerNamespace . 'ProductController@show');

// Example POST route (you'd need a form for this)
// $router->post('/product/create', $controllerNamespace . 'ProductController@create');


// Custom 404 Handler
$router->set404(function () {
    header('HTTP/1.1 404 Not Found');
    // You can render a nice 404 view here
    // For example: require __DIR__ . '/../Views/errors/404.php';
    echo '<h1>404 - Page Not Found</h1>';
});

// Run the router
$router->run();