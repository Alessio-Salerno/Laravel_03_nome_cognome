<?php

// QUESTO È IL FILE DELLE ROTTE -> UNA ROTTA CORRISPONDE AD UNA VISTA

/*
1 PASSAGGIO -> CREARE LA ROTTA

2 PASSAGGIO -> CREARE LA VISTA

*/

use App\Http\Controllers\docentiController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
// In caso di errore passare -> \App\Http\Controllers\PublicController

// File di routing -> controllo



// ROTTA NOMINALE -> DARE UN ETICHETTA ALLE ROTTE PER RICHIAMARLE


Route::get('/', function () {
    $titolo = 'HACK124';
    return view('welcome', ['titolo'=> $titolo]); //PASSAGGIO DI DATI ALLA VISTA
    //CHIAVE DELL'ARRAY - NOME DELLA VARIABILE SULLA VISTA 
}); 

Route::get('/chiSiamo',[PublicController::class, 'chiSiamo'])->name('chi.siamo'); // METODO PER DARE UN NOME ALLA ROTTA


Route::get('/dove-siamo', function () {
    $dati = [
        
        ['città' => 'Roma', 'indirizzo' => 'Via dei Condotti'],
        ['città' => 'Milano', 'indirizzo' => 'Corso Vittorio Emanuele'],
        ['città' => 'Napoli', 'indirizzo' => 'Via Toledo'],


    
    ];
        
    return view('doveSiamo', ['dati' => $dati]);
})->name('doveSiamo');


// ROUTE COSA SAPPIAMO
Route::get('/cosa-sappiamo', function() {

    $users = [
        ['name'=> 'Mario', 'surname'=> 'Caracciolo' , 'role' => 'Senior Manager'],
        ['name'=> 'Giuseppe', 'surname'=> 'Rossi' , 'role' => 'Capo Due'],
        ['name'=> 'Walter', 'surname'=> 'Bianchi' , 'role' => 'Developer'],
    ];

    // Passa l'array $users alla vista
    return view('cosa-sappiamo', ['users' => $users]);
})->name('cosaSappiamo');


// ROUTE COSA SAPPIAMO (DETAIL)
Route::get('/cosa-sappiamo/detail/{name}', function($name) {
    $users = [
        ['name'=> 'Mario', 'surname'=> 'Caracciolo' , 'role' => 'Senior Manager'],
        ['name'=> 'Giuseppe', 'surname'=> 'Rossi' , 'role' => 'Capo Due'],
        ['name'=> 'Walter', 'surname'=> 'Bianchi' , 'role' => 'Developer'],
    ];

foreach ($users as $user) {
    if ($name == $user['name']) {
        return view ('cosa-sappiamo-detail', ['user' => $user]);
    }
}

})->name('cosaSappiamoDetail');



// ROUTE MOVIES 

Route::get('/movies' , function(){
// ARRAY MOVIES

$movies = [
    ['id' =>'1', 'title' =>'Doctor Bave', 'director' =>'Razonate',  'img' =>'https://picsum.photos/200/300', 'genere' =>'Fantascienza' ],
    ['id' =>'2', 'title' =>'Mafia di oggi', 'director' =>'Biden',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Politica'],
    ['id' =>'3', 'title' =>'Venom 4', 'director' =>'Trump',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Horror' ],
    ['id' =>'4', 'title' =>'Spider man', 'director' =>'La Russa',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Comico' ],
    ['id' =>'5', 'title' =>'Stranger things', 'director' =>'Vannacci',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Europeo' ],
];

return view('movie.movies', ['movies' => $movies]);



}) -> name('movie.list');



// ROTTA PER MOVIE DETAILS

Route::get('/movie/detail/{id}', function($id) {
    $movies = [
        ['id' =>'1', 'title' =>'Doctor Bave', 'director' =>'Razonate',  'img' =>'https://picsum.photos/200/300', 'genere' =>'Fantascienza' ],
        ['id' =>'2', 'title' =>'Mafia di oggi', 'director' =>'Biden',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Politica'],
        ['id' =>'3', 'title' =>'Venom 4', 'director' =>'Trump',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Horror' ],
        ['id' =>'4', 'title' =>'Spider man', 'director' =>'La Russa',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Comico' ],
        ['id' =>'5', 'title' =>'Stranger things', 'director' =>'Vannacci',  'img' =>'https://picsum.photos/200/300', 'genere' => 'Europeo' ],
    ];

    // Cerca il film con l'id specificato
    foreach ($movies as $movie) {
        if ($id == $movie['id']) {
            // Passa il film trovato alla vista 'movie-detail'
            return view('movie-detail', ['movie' => $movie]);
        }
    }

    // Se non trova il film, mostra un errore 404
    abort(404, 'Film non trovato');
})->name('movieDetail');




// ORDINE-> ROTTA , CONTROLLO E VISTA
Route::get('/docenti', [docentiController::class, 'docenti'])->name('docenti');

// STUDENTI
Route::get('/studenti/dettaglio/{id}', [PublicController::class, 'dettaglio'])->name('studenti.detail');

// Pagina di dettaglio dei docenti


// ROTTA PARAMETRICA -> rotta che accetta un parametro
Route::get('/docenti/dettaglio/{name}', [docentiController::class, 'dettaglio']) ->name('docente.detail');



