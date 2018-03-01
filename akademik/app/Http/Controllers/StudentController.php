<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Room;
use App\Room_Student;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$students = Student::with( [
			'active',
			'active.payments',
			'active.room',
			'old.payments',
			'old.room',
			'old',
		] )->orderBy( 'first_name' )->paginate( 10 );
		
		return view( 'admin.students', compact( 'students' ) );
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Student $student )
	{
		return view( 'admin.student_new', compact( 'student' ) );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request )
	{
		$student = Student::create( $request->all() );
		
		flash( 'Pomyślnie dodano nowego studenta!' )->success();
		return redirect( route( 'student.show', $student ) );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\student $student
	 * @return \Illuminate\Http\Response
	 */
	public function show( Student $student )
	{
		return view( 'admin.student', compact( 'student' ) );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\student $student
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Student $student )
	{
		return view( 'admin.student_edit', compact( 'student' ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\student $student
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Student $student )
	{
		$student->update( $request->all() );
		
		flash( 'Pomyślnie zaktualizowano dane studenta!' )->success();
		return redirect( route( 'student.show', $student ) );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\student $student
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Student $student )
	{
		optional( $student->active )->delete();
		$student->delete();
		
		flash( 'Student został pomyślnie usunięty z systemu!' )->success();
		return redirect()->route( 'student.index' );
	}
	
	public function evict( Student $student )
	{
		$student->active->deleted_at = now();
		$student->active->save();
		
		flash( 'Pomyślnie wymeldowano studenta!' )->success();
		return back();
	}
	
	public function add_payment( Student $student )
	{
		return view( 'admin.add_payment', compact( 'student' ) );
	}
	
	public function add_payment_store( Student $student )
	{
		$student->active->payments()->create( request()->all() );
		
		flash( 'Pomyślnie zaakceptowano płatność studenta!' )->success();
		return redirect( route( 'student.show', $student ) );
	}
	
	public function move_in( Student $student )
	{
		$free_rooms = Room::free_rooms()->pluck( 'id' );
		return view( 'admin.move_in', compact( 'student', 'free_rooms' ) );
	}
	
	public function move_in_patch( Student $student )
	{
		Room_Student::create( [
			'student_id'  => $student->id,
			'room_id'     => request( 'room_id' ),
			'from'        => request( 'from' ),
			'to'          => request( 'to' ),
			'kaucja_data' => now(),
		] );
		
		flash( 'Pomyślnie zameldowano studenta!' )->success();
		return redirect( route( 'student.show', $student ) );
	}
	
	public function kaucja( Student $student )
	{
		$student->active->update( [
			'kaucja'      => 1,
			'kaucja_data' => now(),
		] );
		
		flash( 'Pomyślnie zaakceptowano kaucję!' )->success();
		return redirect( route( 'student.show', $student ) );
	}
}
