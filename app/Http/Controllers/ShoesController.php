<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public $shoes = [
        ['id'=>1, 'brand'=>'Adidas','model'=>'Campus','img'=>'/media/adidas.webp'],
        ['id'=>2, 'brand'=>'Nike','model'=>'Dunk','img'=>'/media/nikeDunk.webp'],
        ['id'=>3, 'brand'=>'New Balance','model'=>'330','img'=>'/media/Newbalance.webp'],
        ['id'=>4, 'brand'=>'Puma','model'=>'Speedcat','img'=>'/media/puma.webp'],
        ['id'=>5, 'brand'=>'Converse','model'=>'Star','img'=>'/media/converse.avif'],
        ['id'=>6, 'brand'=>'Timberland','model'=>'Stivale','img'=>'/media/timberland.webp'],
    ];
    
    public function ShoesList(){
    return view('Shoes.shoes', ['shoes'=>$this->shoes]);
    }

    public function ShoesDetail($id){
    foreach($this->shoes as $Shoes){
        if($id == $Shoes['id']){
            return view('Shoes.shoes-detail', ['Shoes'=>$Shoes]);
        }
    }
}

}
