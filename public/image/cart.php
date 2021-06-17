<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $product_id){
        $giohang = ['qty' => 0, 'price'=> $item -> unit_price, 'item' => $item];
        if($this->items){
            if(array_key_exists($product_id,$this->items)){
                $giohang = $this -> items[$product_id];
            }
        }
        $giohang['qty']++;
        $giohang['price'] = $item -> unit_price * $giohang['qty'];
        $this -> items[$product_id] = $giohang;
        $this -> totalQty++;
        $this -> totalPrice += $item -> unit_price;
    }

}
