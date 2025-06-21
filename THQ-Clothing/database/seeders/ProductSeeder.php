<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa hết dữ liệu cũ
        Product::truncate();

        // Lấy id category theo tên
        $categoryIds = Category::pluck('id', 'name');

        $products = [
            [
                'code' => 'AT001',
                'name' => 'Áo Thun Nam Cơ Bản',
                'price' => 199000,
                'material' => 'Cotton 100%',
                'description' => 'Áo thun nam cơ bản, chất liệu cotton mềm mại, thoáng mát',
                'image' => 'product/1.jpg',
                'category_id' => $categoryIds['Áo Thun'] ?? null,
                'stock' => 50,
                'is_active' => true
            ],
            [
                'code' => 'AT002',
                'name' => 'Áo Thun Nam Polo',
                'price' => 299000,
                'material' => 'Cotton 95%',
                'description' => 'Áo polo nam thời trang, phù hợp mọi dịp',
                'image' => 'product/2.jpg',
                'category_id' => $categoryIds['Áo Thun'] ?? null,
                'stock' => 30,
                'is_active' => true
            ],
            [
                'code' => 'ASM001',
                'name' => 'Áo Sơ Mi Nam Trắng',
                'price' => 399000,
                'material' => 'Cotton 100%',
                'description' => 'Áo sơ mi nam trắng công sở, lịch sự',
                'image' => 'product/3.jpg',
                'category_id' => $categoryIds['Áo Sơ Mi'] ?? null,
                'stock' => 25,
                'is_active' => true
            ],
            [
                'code' => 'ASM002',
                'name' => 'Áo Sơ Mi Nam Xanh',
                'price' => 450000,
                'material' => 'Cotton 100%',
                'description' => 'Áo sơ mi nam xanh dương, phong cách trẻ trung',
                'image' => 'product/4.jpg',
                'category_id' => $categoryIds['Áo Sơ Mi'] ?? null,
                'stock' => 20,
                'is_active' => true
            ],
            [
                'code' => 'QJ001',
                'name' => 'Quần Jeans Nam Slim',
                'price' => 599000,
                'material' => 'Denim 100%',
                'description' => 'Quần jeans nam slim fit, thời trang',
                'image' => 'product/5.jpg',
                'category_id' => $categoryIds['Quần Jeans'] ?? null,
                'stock' => 40,
                'is_active' => true
            ],
            [
                'code' => 'QT001',
                'name' => 'Quần Tây Nam Đen',
                'price' => 499000,
                'material' => 'Polyester 70%',
                'description' => 'Quần tây nam đen công sở, lịch sự',
                'image' => 'product/6.jpg',
                'category_id' => $categoryIds['Quần Tây'] ?? null,
                'stock' => 35,
                'is_active' => true
            ],
            [
                'code' => 'AK001',
                'name' => 'Áo Khoác Nam Denim',
                'price' => 799000,
                'material' => 'Denim 100%',
                'description' => 'Áo khoác denim nam thời trang',
                'image' => 'product/7.jpg',
                'category_id' => $categoryIds['Áo Khoác'] ?? null,
                'stock' => 15,
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
