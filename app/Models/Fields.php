<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fields extends Model{
    use HasFactory;

    public function customFields(){
        return $this->hasMany('App\Models\CustomFields');
    }

}
