<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    protected $table = "users";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasTable($this->table)) {

          Schema::create($this->table, function (Blueprint $table) {

                $table->engine = 'InnoDB';
                /* Primary Key */
                $table->increments('id');

                /* Main Data*/
                $table->string('fullname');
                $table->string('email')->unique();
                $table->string('no_telp')->unique();
                $table->string('username')->unique();
                $table->string('password',255);
                $table->string('image',255)->nullable();
                $table->text('address')->nullable();
                $table->tinyInteger('status')->default(0);
                $table->rememberToken();
                
                /* Foreign Key */
                $table->integer('id_group')->unsigned();
                $table->foreign('id_group')->references('id')
                      ->on('groups')->onDelete('cascade')->onUpdate('cascade');
                
                /* Action Data */
                $table->string('created_by')->nullable()->default('system');
                $table->timestamps();
          });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
