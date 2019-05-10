<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   // protected $fillable = [ 'title', 'description'];
   protected $guarded = [

   ];

   public function tasks()
   {
      return $this->hasMany(Task::class);
   }

   public function addTask($task)
   {
      // dd($description);
      $this->tasks()->create($task);
   }
}
