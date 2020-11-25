<?php

namespace App\Model;
class cart extends Model
{
    // protected $table='Products';
    // protected $fillable=["ProductName","id","Img","Description","Qty","Price"];
    public $items=null;
    public $totalqty = 0;
    public $totalprice = 0;

    public function __construct($oldcart){
        if ($oldcart) {
            $this->items = $oldcart->items;
            $this->totalqty = $oldcart->totalqty;
            $this->totalprice = $oldcart->totalprice;
        }

    }
    public function add($item,$id)
    {
        $storeditem = ['qty'=>0 , 'price'=>$item->price , 'item'=>$item];
        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storeditem = $this->items[$id];
            }
        }
        $storeditem['qty']++;
        $storeditem['price']=$item->price * $storeditem['qty'];
        $this->items[$id] = $storeditem;
        $this->totalqty++;
        $this->totalprice+=$item->price;


    }
}


