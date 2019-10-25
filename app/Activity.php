<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = "activities";

    protected $fillable = [
        'description', 'date', 'user_id', 'report__id',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function user()
    {
    	return $this->belowsTo = ('App\User');
    }

    public function report()
    {
    	return $this->belowsTo = ('App\Report');
    }
}
