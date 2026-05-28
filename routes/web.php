<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');
Route::get('/chiSiamo', function () {
    $users = [
    ['name'=>'Marco','surname'=>'Santini','role'=>'Direttore'],
    ['name'=>'Fabio','surname'=>'DiBello','role'=>'Cassiere'],
    ['name'=>'Vanessa','surname'=>'Rossi','role'=>'Comessa'],
    ];
    return view('about-us', ['users'=>$users]);
})->name('aboutUs');
Route::get('/chiSiamo/deteil/{name}', function($name){
    $users = [
    ['name'=>'Marco','surname'=>'Santini','role'=>'Direttore'],
    ['name'=>'Fabio','surname'=>'DiBello','role'=>'Cassiere'],
    ['name'=>'Vanessa','surname'=>'Rossi','role'=>'Comessa'],
    ];
    foreach($users as $user){
        if($name == $user['name']){
            return view('about-us-detail', ['user'=>$user]);
        }
    }
})->name('aboutUsDetail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

Route::get('/shoes', function(){
    $shoes = [
        ['id'=>1, 'brand'=>'Adidas','model'=>'Campus','img'=>'/media/adidas.webp'],
        ['id'=>2, 'brand'=>'Nike','model'=>'Dunk','img'=>'/media/nikeDunk.webp'],
        ['id'=>3, 'brand'=>'New Balance','model'=>'330','img'=>'/media/Newbalance.webp'],
        ['id'=>4, 'brand'=>'Puma','model'=>'Speedcat','img'=>'/media/puma.webp'],
        ['id'=>5, 'brand'=>'Converse','model'=>'Star','img'=>'/media/converse.avif'],
        ['id'=>6, 'brand'=>'Timberland','model'=>'Stivale','img'=>'/media/timberland.webp'],
    ];
    return view('Shoes.shoes', ['shoes'=>$shoes]);
})->name('Shoes.list');

Route::get('/shoes/detail{id}', function($id){
    $shoes = [
        ['id'=>1, 'brand'=>'Adidas','model'=>'Campus','img'=>'/media/adidas.webp'],
        ['id'=>2, 'brand'=>'Nike','model'=>'Dunk','img'=>'/media/nikeDunk.webp'],
        ['id'=>3, 'brand'=>'New Balance','model'=>'330','img'=>'/media/Newbalance.webp'],
        ['id'=>4, 'brand'=>'Puma','model'=>'Speedcat','img'=>'/media/puma.webp'],
        ['id'=>5, 'brand'=>'Converse','model'=>'Star','img'=>'/media/converse.avif'],
        ['id'=>6, 'brand'=>'Timberland','model'=>'Stivale','img'=>'/media/timberland.webp'],
    ];
    foreach($shoes as $Shoes){
        if($id == $Shoes['id']){
            return view('Shoes.shoes-detail', ['Shoes'=>$Shoes]);
        }
    }
})->name('shoes.detail');