<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationsTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('educations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('institute');
			$table->string('programm');
			$table->string('university');
			$table->string('start');
			$table->string('end');
			$table->string('description');
			$table->enum('status',['active','inactive']);
			$table->timestamps();
		});
	}
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function down() {
		Schema::drop('educations');
	}
}