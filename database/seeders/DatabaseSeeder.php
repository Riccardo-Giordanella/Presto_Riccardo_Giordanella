<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Salute_e_Bellezza',
        'Casa_e_Giardinaggio',
        'Giocattoli',
        'Sport',
        'Animali_domestici',
        'Libri_e_Riviste',
        'Accessori',
        'Motori'
    ];

    public function run(): void
    {
        foreach($this->categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
