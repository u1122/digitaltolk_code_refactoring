<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function getTranslatorJobs($userId, $status){
        // logic will be written here like $jobs data
        $data = Model_name::pluck('jobs')->all();
        //return job value to the controller
    }

    public function checkParticularJob(){
        // logic will be written here like $jobs data

        //return job value to the controller
    }

    protected $fillable = [
       // fields will be specify here
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
       // protected fields will be written here
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
      // time stamp
    ];
}
