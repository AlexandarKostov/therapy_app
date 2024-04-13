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
        $categories = [
            'Individual' => 'For myself',
            'Couples' => 'For me and my partner ',
            'Teen' => 'For my child ',
        ];
        foreach ($categories as $key=>$value) {
            Category::create([
                'name' => $key,
                'display_name'=>$value
            ]);

        }


    }
}
