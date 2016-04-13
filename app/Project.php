<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    protected $fillable = [
        'name', 'wsdl_name', 'wsdl_path', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function getProjectsWithUsers()
    {
        return DB::table('projects')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->select('*')
            ->get();
    }
}
