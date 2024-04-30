<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePp2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp2s', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentID')->unique(); // Assuming student ID is unique
            $table->string('course');
            $table->string('parentsname');
            $table->string('parents');
            $table->string('classTeacher');
            $table->string('receiptNO');
            $table->integer('feepaid')->default(0); // Assuming fee is non-negative
            $table->integer('feebalance')->default(3500); // Assuming balance is non-negative
            $table->string('class_name');
            $table->integer('forwarded_fee')->default(0); // Add this line to your migration
            $table->enum('term', ['term1', 'term2', 'term3'])->default('term1'); // Term enum
            $table->enum('grade', ['playgroup', 'pp1', 'pp2'])->default('playgroup'); // Grade enum
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
        Schema::dropIfExists('pp2s');
    }
}
