<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Áo Thun',
                'slug' => 'ao-thun',
                'description' => 'Áo thun nam thời trang',
                'image' => 'category/1.jpg',
                'is_active' => true
            ],
            [
                'name' => 'Áo Sơ Mi',
                'slug' => 'ao-so-mi',
                'description' => 'Áo sơ mi nam công sở',
                'image' => 'category/2.jpg',
                'is_active' => true
            ],
            [
                'name' => 'Quần Jeans',
                'slug' => 'quan-jeans',
                'description' => 'Quần jeans nam thời trang',
                'image' => 'category/3.jpg',
                'is_active' => true
            ],
            [
                'name' => 'Quần Tây',
                'slug' => 'quan-tay',
                'description' => 'Quần tây nam công sở',
                'image' => 'category/4.jpg',
                'is_active' => true
            ],
            [
                'name' => 'Áo Khoác',
                'slug' => 'ao-khoac',
                'description' => 'Áo khoác nam thời trang',
                'image' => 'category/5.jpg',
                'is_active' => true
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
