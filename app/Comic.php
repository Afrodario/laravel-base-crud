<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //Definisco come protetti i campi passati nel controller con la funzione fill in store
    protected $fillable = ['thumb', 'title', 'series', 'description', 'price', 'sale_date', 'type'];
}
