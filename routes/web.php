<?php

// QUESTO È IL FILE DELLE ROTTE -> UNA ROTTA CORRISPONDE AD UNA VISTA

/*
1 PASSAGGIO -> CREARE LA ROTTA

2 PASSAGGIO -> CREARE LA VISTA

*/


use Illuminate\Support\Facades\Route;

// File di routing -> controllo

Route::get('/', function () {
    $titolo = 'HACK124';
    return view('welcome', ['titolo'=> $titolo]); //PASSAGGIO DI DATI ALLA VISTA
    //CHIAVE DELL'ARRAY - NOME DELLA VARIABILE SULLA VISTA 
});

Route::get('/chi-siamo', function(){
    $studenti = [

        ['name' => 'Leonardo' , 'surname'=>'Asaro'],
        ['name' =>'Michele', 'surname'=>'Sette'],
        ['name' =>'Emanuele', 'surname'=>'Di Napoli'],
        

    ];
  return view('chiSiamo', ['studenti' => $studenti]); //-> ritorna una vista e va a vedere i file contenuti nella cartella views
});


Route::get('/dove-siamo', function () {
    $dati = [
        
        ['città' => 'Roma', 'indirizzo' => 'Via dei Condotti'],
        ['città' => 'Milano', 'indirizzo' => 'Corso Vittorio Emanuele'],
        ['città' => 'Napoli', 'indirizzo' => 'Via Toledo'],


    
    ];
        
    return view('doveSiamo', ['dati' => $dati]);
});