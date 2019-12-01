<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
    public $table = "work_orders";

    public function workproduct() {
        return $this->belongsTo('\App\workproduct', 'workorder_id');
    }
}
