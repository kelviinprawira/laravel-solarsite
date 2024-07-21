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
            $table->double('wm_alat_berat_plan')->nullable();
            $table->double('wm_alat_berat_real')->nullable();
            $table->double('wm_dt_infras_plan')->nullable();
            $table->double('wm_dt_infras_real')->nullable();
            $table->double('wm_pompa_genset_plan')->nullable();
            $table->double('wm_pompa_genset_real')->nullable();
            $table->double('wm_unit_umum_plan')->nullable();
            $table->double('wm_unit_umum_real')->nullable();
            $table->double('tp_dt_transport_plan')->nullable();
            $table->double('tp_dt_transport_real')->nullable();
            $table->double('tp_dt_infras_plan')->nullable();
            $table->double('tp_dt_infras_real')->nullable();
            $table->double('rt_alat_rawat_plan')->nullable();
            $table->double('rt_alat_rawat_real')->nullable();
            $table->double('rt_alat_tankos_plan')->nullable();
            $table->double('rt_alat_tankos_real')->nullable();
            $table->double('ms_genset_plan')->nullable();
            $table->double('ms_genset_real')->nullable();
            $table->double('ms_alat_pabrik_plan')->nullable();
            $table->double('ms_alat_pabrik_real')->nullable();
            $table->double('inf_alat_berat_plan')->nullable();
            $table->double('inf_alat_berat_real')->nullable();
            $table->double('inf_dt_infras_plan')->nullable();
            $table->double('inf_dt_infras_real')->nullable();
            $table->double('inf_pompa_genset_plan')->nullable();
            $table->double('inf_pompa_genset_real')->nullable();
            $table->double('inf_unit_umum_plan')->nullable();
            $table->double('inf_unit_umum_real')->nullable();
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
