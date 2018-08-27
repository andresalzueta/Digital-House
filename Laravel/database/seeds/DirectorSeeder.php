<?php

use Illuminate\Database\Seeder;

use App\Director;
use App\Movie;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // para inserir um registro 
        // $diretor = Director::create(['first_name' => "Nome 1",'last_name' => "Sobrenome 1",'birthday' => "1969/12/06",'rating' => 1.1,]);
        // $diretor->save();
        
        // para inserir um conjunto de registros fake
        $diretores = factory(Director::class)->times(10)->create();

        foreach ($diretores as $diretor) {
            // Criamos 2 filmes para cada diretor
            factory(Movie::class, 5)->create([
                'director_id' => $diretor->id,
            ]);
        }
    }
}
