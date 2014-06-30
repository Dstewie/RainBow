<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->unique();
			$table->text('description');
			$table->date('date_begin');
			$table->date('date_end');
			$table->integer('price')->unsigned();
			$table->integer('countries_id')->unique();
			$table->integer('categories_id')->unique();
			$table->string('im_prew');
			$table->string('img_big');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offers');
	}

}
