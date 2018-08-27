<?php

use Illuminate\Database\Seeder;

use App\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds into genres table.
     *
     * @return void
     */
    public function run()
    {
        // Antes de 'semear' e preencher a tabela genres, e para não duplicar registro podemos deletar todos os registros.
        // $generos = Genre::all();
        // $generos->delete();

        $genero = Genre::create(['name' => "Genero 13",'ranking' => 13,'active' => true]);
        $genero->save();
// 
        $genero = Genre::create(['name' => "Genero 14",'ranking' => 14,'active' => true]);
        $genero->save();
        
        // para usar um factory para gerar dados fake
        // $generos = factory(Genre::class)->times(2)->create();
    }
}
