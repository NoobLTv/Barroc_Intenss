<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companydetail extends Model
{
    public $table = "companydetails";

    protected $fillable = [
        'companyname', 'address', 'city', 'postalcode', 'telephonenumber', 'mail'
    ];
}
