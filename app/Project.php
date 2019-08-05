<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';

    protected $attributes = [
        'description' => 'None',
    ];

    protected $fillable = ['project_name', 'description'];

}
