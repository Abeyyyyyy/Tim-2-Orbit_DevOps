<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->nullable()->after('email');
            $table->string('nisn')->nullable()->after('username');
            $table->date('birth_date')->nullable()->after('nisn');
            $table->text('address')->nullable()->after('birth_date');
            $table->string('phone')->nullable()->after('address');
            $table->string('kelas')->nullable()->after('phone');
            $table->string('jurusan')->nullable()->after('kelas');
            $table->string('tahun_ajaran')->nullable()->after('jurusan');
            $table->enum('status', ['Aktif', 'Tidak Aktif', 'Lulus'])->default('Aktif')->after('tahun_ajaran');
            $table->string('guru_wali')->nullable()->after('status');
            $table->string('instagram')->nullable()->after('guru_wali');
            $table->string('facebook')->nullable()->after('instagram');
            $table->string('twitter')->nullable()->after('facebook');
            $table->string('linkedin')->nullable()->after('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'nisn',
                'birth_date',
                'address',
                'phone',
                'kelas',
                'jurusan',
                'tahun_ajaran',
                'status',
                'guru_wali',
                'instagram',
                'facebook',
                'twitter',
                'linkedin'
            ]);
        });
    }
};
