<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create(
            'timers',
            function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
                $table->foreignId('workspace_id')->nullable()->constrained()->nullOnDelete();
                $table->timestamp('started_at');
                $table->timestamp('stopped_at')->nullable();
                $table->softDeletes();
                $table->timestamps();
            }
        );
    }

    public function down()
    {
        Schema::dropIfExists('timers');
    }
};
