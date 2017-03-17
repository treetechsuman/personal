<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlideTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('slide', function (Blueprint $table) {
			$table->increments('id');
			$table->string('content');
			$table->string('display_order');
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
		Schema::drop('slide');
	}
}