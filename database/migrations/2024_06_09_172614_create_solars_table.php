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
            $table->decimal('wm_alat_berat_plan', 5, 2)->nullable();
            $table->decimal('wm_alat_berat_real', 5, 2)->nullable();
            $table->decimal('wm_dt_infras_plan', 5, 2)->nullable();
            $table->decimal('wm_dt_infras_real', 5, 2)->nullable();
            $table->decimal('wm_pompa_genset_plan', 5, 2)->nullable();
            $table->decimal('wm_pompa_genset_real', 5, 2)->nullable();
            $table->decimal('wm_unit_umum_plan', 5, 2)->nullable();
            $table->decimal('wm_unit_umum_real', 5, 2)->nullable();
            $table->decimal('tp_dt_transport_plan', 5, 2)->nullable();
            $table->decimal('tp_dt_transport_real', 5, 2)->nullable();
            $table->decimal('tp_dt_infras_plan', 5, 2)->nullable();
            $table->decimal('tp_dt_infras_real', 5, 2)->nullable();
            $table->decimal('rt_alat_rawat_plan', 5, 2)->nullable();
            $table->decimal('rt_alat_rawat_real', 5, 2)->nullable();
            $table->decimal('rt_alat_tankos_plan', 5, 2)->nullable();
            $table->decimal('rt_alat_tankos_real', 5, 2)->nullable();
            $table->decimal('ms_genset_plan', 5, 2)->nullable();
            $table->decimal('ms_genset_real', 5, 2)->nullable();
            $table->decimal('ms_alat_pabrik_plan', 5, 2)->nullable();
            $table->decimal('ms_alat_pabrik_real', 5, 2)->nullable();
            $table->decimal('inf_alat_berat_plan', 5, 2)->nullable();
            $table->decimal('inf_alat_berat_real', 5, 2)->nullable();
            $table->decimal('inf_dt_infras_plan', 5, 2)->nullable();
            $table->decimal('inf_dt_infras_real', 5, 2)->nullable();
            $table->decimal('inf_pompa_genset_plan', 5, 2)->nullable();
            $table->decimal('inf_pompa_genset_real', 5, 2)->nullable();
            $table->decimal('inf_unit_umum_plan', 5, 2)->nullable();
            $table->decimal('inf_unit_umum_real', 5, 2)->nullable();
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
