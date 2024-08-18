<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
* Class Team
* Represents the data from the Teams table
*/
class Team extends Model
{   
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //fillable values
    protected $fillable = [
        'teamName',
        'country',
        'teamColor',
        'yearFounded'
    ];

    //A team can hold a lot of players
    public function players() {
        return $this->hasMany(Player::class);
    }
}