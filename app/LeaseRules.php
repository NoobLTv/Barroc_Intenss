<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaseRules extends Model
{
    public $table = "lease_rules";

    public function Leases() {
        return $this->hasMany('\App\Lease', 'lease_id');
    }
}
