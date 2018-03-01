<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Payment
 *
 * @property-read \App\Room_Student $room_student
 * @mixin \Eloquent
 */
class Payment extends Model
{
	protected $guarded = [];
	
    public function room_student()
	{
		return $this->belongsTo(Room_Student::class)->withTrashed();
	}
}
