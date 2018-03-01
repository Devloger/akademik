<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = factory(\App\User::class)->create();
		
		$rooms = factory( \App\Room::class, 15 )->create();
		
		$rooms->each( function( $room )
		{
			$room_count = rand( 1, $room->count );
			while( $room_count > 0 )
			{
				$student = factory( \App\Student::class )->create();
				$room_student = factory( \App\Room_Student::class )->create( [
					'student_id' => $student->id,
					'room_id'    => $room->id,
				] );
				$payment = factory( \App\Payment::class )->create( [
					'value'           => $room->price,
					'room_student_id' => $room_student->id,
				] );
				
				if( rand( 1, 100 ) < 20 )
				{
					$alert = factory( \App\Alert::class )->create( [
						'room_id' => $room->id,
						'student_id' => $student->id,
					] );
				}
				
				$room_count--;
			}
		} );
	}
}
