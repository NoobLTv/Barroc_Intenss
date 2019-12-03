<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lease extends Model
{
    public $table = "leases";

    public function leaseRule() {
        return $this->belongsTo('\App\LeaseRules', 'lease_id');
    }
}
