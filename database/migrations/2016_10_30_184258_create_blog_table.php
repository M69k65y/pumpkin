<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('blog_posts', function (Blueprint $table){

			$table->increments("post_id");
			$table->string('post_cover_image');
			$table->date('post_date');
			$table->string('post_title');
			$table->string('post_summary');
			$table->string('post_body');
			$table->string('post_author');

		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::dropIfExists('blog_posts');

	}
}
