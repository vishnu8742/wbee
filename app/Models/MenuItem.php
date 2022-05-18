<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    function categories(){
        return $this->hasMany("\App\Models\MenuItem", "parent_id");
    }

    public function children()
    {
        return $this->hasMany("\App\Models\MenuItem", "parent_id")->with('categories');
    }
}
