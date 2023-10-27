<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('position');
            $table->decimal('basic_salary',8,2)->unsigned()->default(0);
            $table->decimal('hra',8,2)->unsigned()->default(0);
            $table->decimal('da',8,2)->unsigned()->default(0);
            $table->decimal('other_allowances',8,2)->unsigned()->default(0);
            $table->decimal('gross_salary',12,2)->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
