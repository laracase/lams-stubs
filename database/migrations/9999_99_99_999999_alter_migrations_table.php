<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

    // 版本，大于 0 才会运行
    public int $version = 1;

    protected string $table = 'migrations';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::table($this->table)->where('migration', 'like', '%_alter_%')->delete();
        DB::table($this->table)->where('migration', 'like', '%_reset_%')->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
    }
};
