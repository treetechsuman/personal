<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('abouts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->enum('gender',['male','female']);
			$table->string('email');
			$table->string('mobile');
			$table->string('address');
			$table->string('url');
			$table->string('description');
			$table->string('job_title');
			$table->timestamps();
		});
	}
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function down() {
		Schema::drop('abouts');
	}
}