<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "reports";

    protected $fillable = [
        'status', 'user_id',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function user()
    {
    	return $this->belowsTo = ('App\User');
    }

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }
}
