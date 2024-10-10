<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Category::create([
            'name' => 'Cyber Security',
            'slug' => 'cyber-security'
        ]);
    }
}
