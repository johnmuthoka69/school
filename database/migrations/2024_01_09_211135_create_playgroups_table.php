<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaygroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playgroups', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentID');
            $table->string('course');
            $table->string('parentsname');
            $table->string('parents');
            $table->string('classTeacher');
            $table->string('receiptNO');
            $table->integer('feepaid');
            $table->integer('feebalance');
            $table->string('class_name'); // This column should match the datatype and collation of the referenced column
            $table->foreign('class_name')->references('classname')->on('grades');
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
        Schema::dropIfExists('playgroups');
    }
}
