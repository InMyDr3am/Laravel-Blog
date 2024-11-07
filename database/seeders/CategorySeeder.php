<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-Design',
            'color' => 'red',
        ]);
        Category::create([
            'name' => 'Tech',
            'slug' => 'Tech',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Finance',
            'slug' => 'Finance',
            'color' => 'blue',
        ]);
       
    }
}
