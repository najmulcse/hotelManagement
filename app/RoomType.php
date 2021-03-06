<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    
    protected $table = 'roomtypes';

    protected $fillable = [
        'room_category', 'room_capacity',
    ];


    public function room()
    {
    	return $this->hasOne('App\Room');
    }


}
