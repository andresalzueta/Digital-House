<?php

use Illuminate\Database\Seeder;

use App\Actor;
use App\Movie;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // para inserir um registro 
        // $ator = Actor::create(['first_name' => "Nome 1",'last_name' => "Sobrenome 1",'rating' => 1.1,]);
        // $ator->save();
        
        // para inserir um conjunto de registros fake
        $atores = factory(Actor::class)->times(1)->create();
        $filmes = Movie::all();

        foreach ($atores as $ator) {
            // Associamos o ator a 3 filmes aleatórios
            
            $ator->filmes()->sync($filmes->random(3));
        }
    }
}
