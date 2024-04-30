<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Grade extends Model
{
    use HasFactory,Searchable;
    // protected $table = 'classes';
    public function playgroups()
    {
        return $this->hasMany(Playgroup::class, 'class_name');

    }

    public function pp1s()
    {
        return $this->hasMany(Pp1::class, 'class_name');
    }

    public function pp2s()
    {
        return $this->hasMany(Pp2::class, 'class_name');
    }
    // app/Models/Grade.php

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'classname' => $this->classname,
            'classteacher' => $this->classteacher,
            'location' => 'Grade',
            'playgroups' => $this->playgroups->pluck('name')->toArray(),
            'pp1s' => $this->pp1s->pluck('name')->toArray(),
            'pp2s' => $this->pp2s->pluck('name')->toArray(),
            // Add other related attributes or details you want to include in the search results
        ];
    }
    
           

}
