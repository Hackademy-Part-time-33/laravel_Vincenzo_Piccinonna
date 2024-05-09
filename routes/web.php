<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');
Route::get('/chi-siamo', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/servizi',
 function () {
    $servizi = [
        ['name' => 'Siti Web', 'uri' => 'siti-web'],
        ['name' => 'Negozi Digitali', 'uri' => 'ecommerce'],
        ['name' => 'Gestionali in Cloud', 'uri' => 'gestionali-cloud'],
        ['name' => 'Marketing Digitale', 'uri' => 'marketing-digitale'],
    ];



    return view('service',["servizi"=>$servizi]); 
})->name('service');
Route::get('/dettaglio-servizo/{service}', function ($service) {
    return view('detail',['service'=>$service]);
})->name('detail');

