<?php
spl_autoload_register(function ($class_name) {
    // Define the base directory for your classes (in this case, /nivisco/)
    $base_dir = __DIR__ . '/';

    // Convert class name to the path format (e.g., MyClass => class.php)
    $file = $base_dir . str_replace('\\', '/', $class_name) . '.php';

    // Check if the file exists, and if so, include it
    if (file_exists($file)) {
        include $file;
    }
});
