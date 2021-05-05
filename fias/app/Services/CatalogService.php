<?php


namespace App\Services;
use App\product;

class CatalogService
{
    public function get($type) {
       return product::where('Type',$type)->paginate(16);
    }
}
