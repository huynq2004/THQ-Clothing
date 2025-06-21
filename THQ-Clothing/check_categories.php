<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use App\Models\Category;
use App\Models\Product;

echo "Categories:\n";
foreach(Category::all() as $cat) {
    echo $cat->id . " - " . $cat->name . "\n";
}

echo "\nProducts:\n";
foreach(Product::all() as $prod) {
    echo $prod->id . " - " . $prod->name . " (Category: " . $prod->category_id . ")\n";
} 