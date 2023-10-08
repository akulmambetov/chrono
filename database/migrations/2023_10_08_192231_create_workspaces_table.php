<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(
            'workspaces',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('user_id')->constrained();
                $table->softDeletes();
                $table->timestamps();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('workspaces');
    }
};
