<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Alert
 *
 * @mixin \Eloquent
 */
class Alert extends Model
{
	protected $guarded = [];
	use SoftDeletes;
	
    public function closed()
	{
		return $this->deleted_at;
	}
	
	public function student()
	{
		return $this->belongsTo(Student::class)->withTrashed();
	}
	
	public function room()
	{
		return $this->belongsTo(Room::class)->withTrashed();
	}
}
