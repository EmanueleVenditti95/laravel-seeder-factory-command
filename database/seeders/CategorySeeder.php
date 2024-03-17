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
        // Percorso del file CSV
        $csvFile = database_path('csv/categories.csv');

        // Leggi il file CSV
        $csvData = array_map('str_getcsv', file($csvFile));

        // Rimuovi l'intestazione
        $header = array_shift($csvData);

        // Inserisci i dati nel database
        foreach ($csvData as $row) {
            $category = new Category();
            $category->name = $row[0];
            $category->color = $row[1];
            $category->save();
        }
    }
}
