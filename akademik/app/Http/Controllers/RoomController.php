<?php

namespace App\Http\Controllers;

use App\Room;
use App\Room_Student;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$rooms = Room::paginate(10);
    	
        return view('admin.rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$student = Room::create( $request->all() );
	
		flash( 'Pomyślnie dodano nowy pokój!' )->success();
		return redirect( route( 'room.show', $student ) );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('admin.room', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin.room_edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
		\DB::table('room_students')
			->where('room_id', '=', $room->id)
			->update(['room_id' => request('id')]);
		
		\DB::table('alerts')
			->where('room_id', '=', $room->id)
			->update(['room_id' => request('id')]);
			
        $room->update($request->all());
        
        flash('Pomyślnie zaktualizowano pokój!');
        return redirect(route('room.show', $room));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
    	$students_in_room = $room->students;
    	foreach($students_in_room as $student)
		{
			$student->deleted_at = now();
			$student->save();
		}
		
    	$alerts_of_room = $room->alerts;
    	foreach($alerts_of_room as $alert)
		{
			$alert->deleted_at = now();
			$alert->save();
		}
    	
		$room->delete();
	
		flash( 'Pokój został pomyślnie usunięty z systemu!' )->success();
		return redirect()->route( 'room.index' );
    }
}