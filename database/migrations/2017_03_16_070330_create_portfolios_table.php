<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('portfolios', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('description');
			$table->string('image');
			$table->string('url');
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
		Schema::drop('portfolios');
	}
}