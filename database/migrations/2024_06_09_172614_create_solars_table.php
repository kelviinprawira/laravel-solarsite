<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solars', function (Blueprint $table) {
            $table->id();
            $table->integer('wm_alat_berat_plan');
            $table->integer('wm_alat_berat_real');
            $table->integer('wm_dt_infras_plan');
            $table->integer('wm_dt_infras_real');
            $table->integer('wm_pompa_genset_plan');
            $table->integer('wm_pompa_genset_real');
            $table->integer('wm_unit_umum_plan');
            $table->integer('wm_unit_umum_real');
            $table->integer('tp_dt_transport_plan');
            $table->integer('tp_dt_transport_real');
            $table->integer('tp_dt_infras_plan');
            $table->integer('tp_dt_infras_real');
            $table->integer('rt_alat_rawat_plan');
            $table->integer('rt_alat_rawat_real');
            $table->integer('rt_alat_tankos_plan');
            $table->integer('rt_alat_tankos_real');
            $table->integer('ms_genset_plan');
            $table->integer('ms_genset_real');
            $table->integer('ms_alat_pabrik_plan');
            $table->integer('ms_alat_pabrik_real');
            $table->integer('inf_alat_berat_plan');
            $table->integer('inf_alat_berat_real');
            $table->integer('inf_dt_infras_plan');
            $table->integer('inf_dt_infras_real');
            $table->integer('inf_pompa_genset_plan');
            $table->integer('inf_pompa_genset_real');
            $table->integer('inf_unit_umum_plan');
            $table->integer('inf_unit_umum_real');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solars');
    }
};
