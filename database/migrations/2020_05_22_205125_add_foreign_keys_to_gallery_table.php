<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGalleryTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gallery', function(Blueprint $table)
		{
			$table->foreign('doc_id', 'gallery_ibfk_1')->references('id')->on('documents')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gallery', function(Blueprint $table)
		{
			$table->dropForeign('gallery_ibfk_1');
		});
	}
}
