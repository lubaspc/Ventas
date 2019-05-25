<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;


class CartController extends Controller
{

public function _construct(){

if(!\Session::has('cart')) \Session::put('cart',array());
}





    //Show car

public function show()
{
$cart = \Session::get('cart');

$total=$this->total();
return view('cart',compact('cart','total'));
}

    //add item

public function add(productos $productos)
{
$cart= \Session::get('cart');
$productos->cantidad = 1;
$cart[$productos->nombre_producto]=$productos;
\Session::put('cart',$cart);
return redirect()->route('cart-show');

}
    //Delete item

public function delete(productos $productos)
{
$cart= \Session::get('cart');
unset($cart[$productos->nombre_producto]);
\Session::put('cart',$cart);
return redirect()->route('cart-show');

}

    //Update item

    public function update(productos $productos,$cantidad)
{
$cart= \Session::get('cart');
$cart[$productos->nombre_producto]-> cantidad =$cantidad;
\Session::put('cart',$cart);
return redirect()->route('cart-show');
}

    //trash item

    public function trash()
{
\Session::forget('cart');
return redirect()->route('cart-show');

}

//Total


private function total(){
$cart=\Session::get('cart');
$total=0;
if(isset($cart)){
foreach($cart as $productos){

$total+=$productos->precio_venta * $productos->cantidad;
}
}
return $total;
}












}
