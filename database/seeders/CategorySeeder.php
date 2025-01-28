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
        Category::insert([
            [
                'id' => '1',
                'name' => 'حملات'
            ],
            [
                'id' => '2',
                'name' => 'فعاليات'
            ],  [
                'id' => '3',
                'name' => 'الكفالات'
            ],

            [
                'id' => '4',
                'name' => 'الحالات الطبية'
            ],
        ]);
    }
}
