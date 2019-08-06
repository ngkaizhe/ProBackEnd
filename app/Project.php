<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // relationship
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //
    protected $table = 'projects';

    protected $attributes = [
        'description' => null,
    ];

    protected $fillable = ['project_name', 'description'];

}
