<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Room
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Alert[] $alerts
 * @mixin \Eloquent
 */
class Room extends Model
{
	use SoftDeletes;
	protected $guarded = [];
	
    public function alerts()
	{
		return $this->hasMany(Alert::class);
	}
	
    public function alerts_old()
	{
		return $this->hasMany(Alert::class)->onlyTrashed();
	}
	
	public function students()
	{
		return $this->hasMany(Room_Student::class);
	}
	
	public function old_students()
	{
		return $this->hasMany(Room_Student::class)->onlyTrashed();
	}
	
	public function places()
	{
		return $this->hasMany(Room_Student::class)->whereNull('deleted_at');
	}
	
	public function has_history()
	{
		return $this->hasMany(Room_Student::class)->onlyTrashed();
	}
	
	public function free()
	{
		if( $this->count > $this->students->count() )
		{
			return true;
		}
		return false;
	}
	
	public static function free_rooms()
	{
		$all_rooms = self::all();
		
		return $free_rooms = $all_rooms->filter(function($room, $key)
		{
			return $room->free();
		});
	}
}
