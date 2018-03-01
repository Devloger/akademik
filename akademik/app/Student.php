<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Student
 *
 * @property-read \App\Room_Student $room
 * @mixin \Eloquent
 */
class Student extends Model {
	
	use SoftDeletes;
	protected $guarded = [];
	
	public function active()
	{
		return $this->hasOne( Room_Student::class );
	}
	
	public function old()
	{
		return $this->hasMany( Room_Student::class )->onlyTrashed()->orderBy( 'from' );
	}
	
	public function alerts()
	{
		return $this->hasMany( Alert::class )->withTrashed();
	}
}
