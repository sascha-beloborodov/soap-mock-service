<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Responses extends Model
{
    protected $fillable = [
        'body', 'soap_action', 'service', 'time', 'project_id', 'resolved',
    ];

}
