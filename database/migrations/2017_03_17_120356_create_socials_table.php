<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialsTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('socials', function (Blueprint $table) {
			$table->increments('id');
			$table->string('icon');
			$table->string('link');
			$table->integer('display_order');
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
		Schema::drop('socials');
	}
}