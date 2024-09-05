<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $MyCategory1 = new Category();
        $MyCategory1->name = "Electrodomésticos";
        $MyCategory1->description = "Descripción 1";
        $MyCategory1->save();

        $MyCategory2 = new Category();
        $MyCategory2->name = "Juguetes";
        $MyCategory2->description = "Descripción 2";
        $MyCategory2->save();

        $MyCategory3 = new Category();
        $MyCategory3->name = "Ropa";
        $MyCategory3->description = "Descripción 3";
        $MyCategory3->save();

        $MyCategory4 = new Category();
        $MyCategory4->name = "Auto";
        $MyCategory4->description = "Descripción 4";
        $MyCategory4->save();

        $MyCategory5 = new Category();
        $MyCategory5->name = "Granos";
        $MyCategory5->description = "Descripción 5";
        $MyCategory5->save();
    }
}
