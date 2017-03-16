<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration {
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up() {
		Schema::create('skills', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('value');
			$table->enum('type',['skill','moreSkill']);
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
		Schema::drop('skills');
	}
}