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
        'Salute e Bellezza',
        'Casa e Giardinaggio',
        'Giocattoli',
        'Sport',
        'Animali domestici',
        'Libri e Riviste',
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
