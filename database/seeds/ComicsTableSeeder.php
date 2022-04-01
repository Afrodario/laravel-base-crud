<?php

//Richiamo il modello comic
use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Richiamo tramite la funzione config il file comics che contiene tutti i dati
        $comics = config('comics');

        //Con un ciclo creo tot nuovi oggetti da seminare nel database
        foreach($comics as $comic) {

            $entry = new Comic();
            $entry->title = $comic['title'];
            $entry->description = $comic['description'];
            $entry->thumb = $comic['thumb'];
            $entry->price = $comic['price'];
            $entry->series = $comic['series'];
            $entry->sale_date = $comic['sale_date'];
            $entry->type = $comic['type'];
            $entry->save();

        }
    }
}
