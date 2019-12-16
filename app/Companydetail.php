<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companydetail extends Model
{
    public $table = "companydetails";

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
