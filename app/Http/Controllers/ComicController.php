<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $comics = Comic::all();

        return view('comic.index', compact('comics'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Tramite ALL raccolgo tutti i dati arrivati nel parametro request
        $data = $request->all();

        //Istanzio un nuovo fumetto
        $comic = new Comic();

        /*
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        */

        //Con la funzione fill riempio tutti i campi raccolti da data
        $comic->fill($data);

        //e salvo i dati
        $comic->save();

        //Ridireziono con REDIRECT alla rotta della show dell'istanza appena creata
        return redirect()->route('comic.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //USO LA DEPENDANCY INJECTION - il nome della variabile dev'essere lo stesso del percorso


        //METODO ALTERNATIVO con il metodo FIND
        //$currentComic = Comic::find($id);

        //Verifico se l'id è effettivamente valido e, nel caso, ritorno la vista relativa, altrimenti un messaggio d'errore
        //if ($currentComic) {
            return view('comic.show', compact('comic'));
        //} else {
        //    abort(404);
        //}
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
