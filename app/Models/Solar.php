<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solar extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'wm_alat_berat_plan',
        'wm_alat_berat_real',
        'wm_dt_infras_plan',
        'wm_dt_infras_real',
        'wm_pompa_genset_plan',
        'wm_pompa_genset_real',
        'wm_unit_umum_plan',
        'wm_unit_umum_real',
        'tp_dt_transport_plan',
        'tp_dt_transport_real',
        'tp_dt_infras_plan',
        'tp_dt_infras_real',
        'rt_alat_rawat_plan',
        'rt_alat_rawat_real',
        'rt_alat_tankos_plan',
        'rt_alat_tankos_real',
        'ms_genset_plan',
        'ms_genset_real',
        'ms_alat_pabrik_plan',
        'ms_alat_pabrik_real',
        'inf_alat_berat_real',
        'inf_alat_berat_plan',
        'inf_dt_infras_real',
        'inf_dt_infras_plan',
        'inf_pompa_genset_plan',
        'inf_pompa_genset_real',
        'inf_unit_umum_plan',
        'inf_unit_umum_real',
        'created_at',
    ];


}
