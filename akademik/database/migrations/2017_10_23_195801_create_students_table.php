<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'students',
			function( Blueprint $table )
			{
				$table->increments( 'id' )->unsigned();
				$table->string( 'first_name', 35 );
				$table->string( 'last_name', 35 );
				$table->string( 'pesel', 11 )->unique();
				$table->date( 'birth' );
				$table->string( 'album', 5 )->unique();
				$table->timestamps();
			} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists( 'students' );
	}
}
