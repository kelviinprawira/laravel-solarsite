<?php

namespace App\Livewire\Solar;

use App\Models\Solar;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Solar - SOLAR SITE')]
class Index extends Component
{
    public $date;
    public $listeners = [
        'reload' => '$refresh'
    ];

    public function mount()
    {
        $this->date = request('date') ?? now()->format('Y-m-d');
    }


    public function render()
    {
        $solars = Solar::whereDate('created_at', $this->date)->first();
        if (!$solars) {
            return view('livewire.solar.index');
        }
        // TOTAL WATER MANAGEMENT SYSTEM PLAN REAL ACH
        $total_wm_plan = $solars->wm_alat_berat_plan + $solars->wm_dt_infras_plan + $solars->wm_pompa_genset_plan + $solars->wm_unit_umum_plan;
        $total_wm_real = $solars->wm_alat_berat_real + $solars->wm_dt_infras_real + $solars->wm_pompa_genset_real +
            $solars->wm_unit_umum_real;
        $wm_alat_berat_ach = $solars->wm_alat_berat_plan != 0 ? $solars->wm_alat_berat_real / $solars->wm_alat_berat_plan : 0;
        $wm_dt_infras_ach = $solars->wm_dt_infras_plan != 0 ? ($solars->wm_dt_infras_real) / ($solars->wm_dt_infras_plan)
            : 0;
        $wm_pompa_genset_ach = $solars->wm_pompa_genset_plan != 0 ? ($solars->wm_pompa_genset_real) /
            ($solars->wm_pompa_genset_plan) : 0;
        $wm_unit_umum_ach = $solars->wm_unit_umum_plan != 0 ? ($solars->wm_unit_umum_real) /
            ($solars->wm_unit_umum_plan) : 0;
        $total_wm_ach = $total_wm_real != 0 ? $total_wm_real / $total_wm_plan * 100 : 0;
        // END WM

        // TOTAL TRANSPORT PLAN REAL ACH
        $total_tp_plan = $solars->tp_dt_transport_plan + $solars->tp_dt_infras_plan;
        $total_tp_real = $solars->tp_dt_transport_real + $solars->tp_dt_infras_real;
        $tp_dt_transport_ach = $solars->tp_dt_transport_plan != 0 ? ($solars->tp_dt_transport_real) /
            ($solars->tp_dt_transport_plan) : 0;
        $tp_dt_infras_ach = $solars->tp_dt_infras_plan != 0 ? ($solars->tp_dt_infras_real) / ($solars->tp_dt_infras_plan)
            : 0;
        $total_tp_ach = $total_tp_real != 0 ? $total_tp_real / $total_tp_plan * 100 : 0;
        // END TRANSPORT

        // TOTAL RAWAT PLAN REAL ACH
        $total_rt_plan = $solars->rt_alat_rawat_plan + $solars->rt_alat_tankos_plan;
        $total_rt_real = $solars->rt_alat_rawat_real + $solars->rt_alat_tankos_real;
        $rt_alat_rawat_ach = $solars->rt_alat_rawat_plan != 0 ? ($solars->rt_alat_rawat_real) /
            ($solars->rt_alat_rawat_plan) : 0;
        $rt_alat_tankos_ach = $solars->rt_alat_tankos_plan != 0 ? ($solars->rt_alat_tankos_real) /
            ($solars->rt_alat_tankos_plan) : 0;
        $total_rt_ach = $total_rt_real != 0 ? $total_rt_real / $total_rt_plan * 100 : 0;
        // END RAWAT

        // TOTAL PABRIK PLAN REAL ACH
        $total_ms_plan = $solars->ms_genset_plan + $solars->ms_alat_pabrik_plan;
        $total_ms_real = $solars->ms_genset_real + $solars->ms_alat_pabrik_real;
        $ms_genset_ach = $solars->ms_genset_plan != 0 ? ($solars->ms_genset_real) / ($solars->ms_genset_plan) : 0;
        $ms_alat_pabrik_ach = $solars->ms_alat_pabrik_plan != 0 ? ($solars->ms_alat_pabrik_real) /
            ($solars->ms_alat_pabrik_plan) : 0;
        $total_ms_ach = $total_ms_real != 0 ? $total_ms_real / $total_ms_plan * 100 : 0;


        // TOTAL INF PLAN REAL ACH
        $total_inf_plan = $solars->inf_alat_berat_plan + $solars->inf_dt_infras_plan + $solars->inf_pompa_genset_plan +
            $solars->inf_unit_umum_plan;
        $total_inf_real = $solars->inf_alat_berat_real + $solars->inf_dt_infras_real + $solars->inf_pompa_genset_real +
            $solars->inf_unit_umum_real;
        $inf_alat_berat_ach = $solars->inf_alat_berat_plan != 0 ? ($solars->inf_alat_berat_real) /
            ($solars->inf_alat_berat_plan) : 0;
        $inf_dt_infras_ach = $solars->inf_dt_infras_plan != 0 ? ($solars->inf_dt_infras_real) /
            ($solars->inf_dt_infras_plan) : 0;
        $inf_pompa_genset_ach = $solars->inf_pompa_genset_plan != 0 ? ($solars->inf_pompa_genset_real) /
            ($solars->inf_pompa_genset_plan) : 0;
        $inf_unit_umum_ach = $solars->inf_unit_umum_plan != 0 ? ($solars->inf_unit_umum_real) /
            ($solars->inf_unit_umum_plan) : 0;
        $total_inf_ach = $total_inf_real != 0 ? $total_inf_real / $total_inf_plan * 100 : 0;

        //TOTAL GLOBAL PLAN DAN REAL
        $total_global_plan = $total_wm_plan + $total_tp_plan + $total_rt_plan + $total_ms_plan + $total_inf_plan;
        $total_global_real = $total_wm_real + $total_tp_real + $total_rt_real + $total_ms_real + $total_inf_real;

        return view('livewire.solar.index', [
            'solar' => $solars,
            'wm_alat_berat_ach' => $wm_alat_berat_ach,
            'wm_dt_infras_ach' => $wm_dt_infras_ach,
            'wm_pompa_genset_ach' => $wm_pompa_genset_ach,
            'wm_unit_umum_ach' => $wm_unit_umum_ach,
            'tp_dt_transport_ach' => $tp_dt_transport_ach,
            'tp_dt_infras_ach' => $tp_dt_infras_ach,
            'rt_alat_rawat_ach' => $rt_alat_rawat_ach,
            'rt_alat_tankos_ach' => $rt_alat_tankos_ach,
            'ms_genset_ach' => $ms_genset_ach,
            'ms_alat_pabrik_ach' => $ms_alat_pabrik_ach,
            'inf_alat_berat_ach' => $inf_alat_berat_ach,
            'inf_dt_infras_ach' => $inf_dt_infras_ach,
            'inf_pompa_genset_ach' => $inf_pompa_genset_ach,
            'inf_unit_umum_ach' => $inf_unit_umum_ach,
            'total_wm_plan' => $total_wm_plan,
            'total_wm_real' => $total_wm_real,
            'total_tp_plan' => $total_tp_plan,
            'total_tp_real' => $total_tp_real,
            'total_rt_plan' => $total_rt_plan,
            'total_rt_real' => $total_rt_real,
            'total_ms_plan' => $total_ms_plan,
            'total_ms_real' => $total_ms_real,
            'total_inf_plan' => $total_inf_plan,
            'total_inf_real' => $total_inf_real,
            'total_wm_ach' => $total_wm_ach,
            'total_tp_ach' => $total_tp_ach,
            'total_rt_ach' => $total_rt_ach,
            'total_ms_ach' => $total_ms_ach,
            'total_inf_ach' => $total_inf_ach,
            'total_global_plan' => $total_global_plan,
            'total_global_real' => $total_global_real,
        ]);
    }
}
