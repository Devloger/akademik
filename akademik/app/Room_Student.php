<?php

namespace App;

use App\Akademik\Student\Balance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room_Student extends Model
{
	use SoftDeletes;
	use Balance;
	protected $table = 'room_students';
	protected $guarded = [];
	
    public function payments()
	{
		return $this->hasMany(Payment::class, 'room_student_id')->orderByDesc('created_at');
	}
	
	public function room()
	{
		return $this->belongsTo(Room::class)->withTrashed();
	}
	
	public function student()
	{
		return $this->belongsTo(Student::class)->withTrashed();
	}
	
}
