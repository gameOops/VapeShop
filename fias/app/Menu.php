<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";

    public function childs()
    {
        return $this->hasMany('App\Menuchild','menu_id','id');
    }
}
