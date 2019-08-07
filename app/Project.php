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

    // new function
    public function addTask($task)
    {
        $this->tasks()->create($task);

        return;
    }

    //
    protected $table = 'projects';

    protected $attributes = [
        'description' => null,
    ];

    protected $fillable = ['project_name', 'description'];

}
