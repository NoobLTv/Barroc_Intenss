<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = ['contactperson_name', 'contactperson_email', 'contactperson_number',
        'companyname', 'companyemail', 'companynumber', 'adres', 'postalcode', 'city'];

    public function User(){
        $this->hasOne('App\User', 'customer_detail_id');
    }
}


