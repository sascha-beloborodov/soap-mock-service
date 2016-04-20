<?php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Requests extends Model
{
    protected $fillable = [
        'name', 'wsdl_name', 'wsdl_path', 'user_id',
    ];

}
