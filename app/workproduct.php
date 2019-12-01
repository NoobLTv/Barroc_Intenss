<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workproduct extends Model
{
    protected $fillable = ['supply_id', 'amount'];
    protected $primaryKey = 'id';
    public $table = "workordersproduct";

    public function workorders() {
        return $this->hasMany('\App\Workorder', 'workorder_id');
    }
}
