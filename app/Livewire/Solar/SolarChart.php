<?php

namespace App\Livewire\Solar;

use App\Models\Solar;
use Illuminate\Support\Number;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SolarChart extends Component
{
    #[Reactive]
    public $date;
    public $chart_wm = [];
    public $chart_tp = [];
    public $chart_rt = [];
    public $chart_ms = [];
    public $chart_inf = [];


    public function updateChartData()
    {
        $chart = Solar::whereDate('created_at', $this->date)->first();
        if ($chart) {
            $this->chart_wm = [
                $chart->wm_alat_berat_plan + $chart->wm_dt_infras_plan + $chart->wm_pompa_genset_plan +
                $chart->wm_unit_umum_plan,
                $chart->wm_alat_berat_real + $chart->wm_dt_infras_real + $chart->wm_pompa_genset_real +
                $chart->wm_unit_umum_real,
                // WM ACH
                Number::format(($chart->wm_alat_berat_real ?? 0 / $chart->wm_alat_berat_plan ?? 0) +
                    ($chart->wm_dt_infras_real ?? 0 /
                    $chart->wm_dt_infras_plan ?? 0) + ($chart->wm_pompa_genset_real ?? 0 / $chart->wm_pompa_genset_plan ?? 0) +
                    ($chart->wm_unit_umum_real ?? 0 / $chart->wm_unit_umum_plan ?? 0), 2),
            ];
            $this->chart_tp = [
                $chart->tp_dt_transport_plan + $chart->tp_dt_infras_plan,
                $chart->tp_dt_transport_real + $chart->tp_dt_infras_real,
                Number::format(
                    ($chart->tp_dt_transport_real ?? 0 / $chart->tp_dt_transport_plan ?? 0) +
                    ($chart->tp_dt_infras_real ?? 0 /
                    $chart->tp_dt_infras_plan ?? 0), 2),
            ];
            $this->chart_rt = [
                $chart->rt_alat_rawat_plan + $chart->rt_alat_tankos_plan,
                $chart->rt_alat_rawat_real + $chart->rt_alat_tankos_real,
                Number::format(($chart->rt_alat_rawat_real ?? 0 / $chart->rt_alat_rawat_plan ?? 0) +
                    ($chart->rt_alat_tankos_real ?? 0 / $chart->rt_alat_tankos_plan ?? 0), 2),
            ];
            $this->chart_ms = [
                $chart->ms_genset_plan + $chart->ms_alat_pabrik_plan,
                $chart->ms_genset_real + $chart->ms_alat_pabrik_real,
                Number::format(($chart->ms_genset_real ?? 0 / $chart->ms_genset_plan ?? 0) +
                    ($chart->ms_alat_pabrik_real ?? 0 /
                    $chart->ms_alat_pabrik_plan ?? 0), 2),
            ];
            $this->chart_inf = [
                $chart->inf_alat_berat_plan + $chart->inf_dt_infras_plan + $chart->inf_pompa_genset_plan +
                $chart->inf_unit_umum_plan,
                $chart->inf_alat_berat_real + $chart->inf_dt_infras_real + $chart->inf_pompa_genset_real +
                $chart->inf_unit_umum_real,
                Number::format(($chart->inf_alat_berat_real ?? 0 / $chart->inf_alat_berat_plan ?? 0) +
                    ($chart->inf_dt_infras_real ?? 0 /
                    $chart->inf_dt_infras_plan ?? 0) + ($chart->inf_pompa_genset_real ?? 0 / $chart->inf_pompa_genset_plan ?? 0) +
                    ($chart->inf_unit_umum_real ?? 0 / $chart->inf_unit_umum_plan ?? 0), 2),
            ];
        }
    }

    public function render()
    {
        $this->updateChartData();
        return view('livewire.solar.solar-chart');
    }
}
