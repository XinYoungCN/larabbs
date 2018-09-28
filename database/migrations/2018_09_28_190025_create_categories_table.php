<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->index()->comment('名称');
            $table->text('description')->nullable()->comment('描述');
            $table->integer('post_count')->default(0)->comment('帖子数');
            /*
             * name —— 分类的名称，为字符串类型，index() 方法是加上索引，为 MySQL 下的搜索优化，comment() 方法能为表结构注释；
             * description —— 分类的描述，为文本类型，nullable() 方法允许字段为空
             * post_count —— 分类下的帖子数量，计数器，default(0) 方法设置默认值为 0；
             * */
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
        Schema::dropIfExists('categories');
    }
}
