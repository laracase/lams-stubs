<?php

use Layer\Dbal\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    // 版本，大于 0 才会运行
    public int $version = 0;

    protected string $table = '';

    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();


            $table->timestamps();
            $table->softDeletes();
            $table->operators();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};
