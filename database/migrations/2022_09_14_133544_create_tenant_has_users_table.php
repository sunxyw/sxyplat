<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant_has_users', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('tenant_id')->constrained('tenants')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('global_user_id')->constrained('users', 'uuid')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['tenant_id', 'global_user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant_has_users');
    }
};
