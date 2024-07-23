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
    public $chart_wm_plan = [];
    public $chart_wm_real = [];
    public $chart_wm_ach = [];
    public $chart_tp_plan = [];
    public $chart_tp_real = [];
    public $chart_tp_ach = [];
    public $chart_rt_plan = [];
    public $chart_rt_real = [];
    public $chart_rt_ach = [];
    public $chart_ms_plan = [];
    public $chart_ms_real = [];
    public $chart_ms_ach = [];
    public $chart_inf_plan = [];
    public $chart_inf_real = [];
    public $chart_inf_ach = [];


    public function updateChartData()
    {
        $chart = Solar::whereDate('created_at', $this->date)->first();
        if ($chart) {
            // Chart WM
            $this->chart_wm_plan = [
                ($chart->wm_alat_berat_plan + $chart->wm_dt_infras_plan + $chart->wm_pompa_genset_plan +
                    $chart->wm_unit_umum_plan)
            ];

            $this->chart_wm_real = [
                ($chart->wm_alat_berat_real + $chart->wm_dt_infras_real + $chart->wm_pompa_genset_real +
                    $chart->wm_unit_umum_real)
            ];

            $this->chart_wm_ach = [
                Number::format(($chart->wm_alat_berat_plan != 0 ? $chart->wm_alat_berat_real /
                        $chart->wm_alat_berat_plan : 0)
                    + ($chart->wm_dt_infras_plan != 0 ? $chart->wm_dt_infras_real / $chart->wm_dt_infras_plan : 0)
                    + ($chart->wm_pompa_genset_plan != 0 ? $chart->wm_pompa_genset_real / $chart->wm_pompa_genset_plan : 0)
                    + ($chart->wm_unit_umum_plan != 0 ? $chart->wm_unit_umum_real / $chart->wm_unit_umum_plan : 0), 2)
            ];

            // Chart TP
            $this->chart_tp_plan = [
                ($chart->tp_dt_transport_plan + $chart->tp_dt_infras_plan)
            ];
            $this->chart_tp_real = [
                ($chart->tp_dt_transport_real + $chart->tp_dt_infras_real)
            ];
            $this->chart_tp_ach = [
                Number::format(
                    ($chart->tp_dt_transport_plan != 0 ? $chart->tp_dt_transport_real / $chart->tp_dt_transport_plan : 0)
                    + ($chart->tp_dt_infras_plan != 0 ? $chart->tp_dt_infras_real / $chart->tp_dt_infras_plan : 0), 2),
            ];

            // Chart RT
            $this->chart_rt_plan = [
                ($chart->rt_alat_rawat_plan + $chart->rt_alat_tankos_plan)
            ];
            $this->chart_rt_real = [
                ($chart->rt_alat_rawat_real + $chart->rt_alat_tankos_real)
            ];
            $this->chart_rt_ach = [
                Number::format(($chart->rt_alat_rawat_plan != 0 ? $chart->rt_alat_rawat_real / $chart->rt_alat_rawat_plan : 0)
                    + ($chart->rt_alat_tankos_plan != 0 ? $chart->rt_alat_tankos_real / $chart->rt_alat_tankos_plan : 0), 2)
            ];

            // Chart MS
            $this->chart_ms_plan = [
                ($chart->ms_genset_plan + $chart->ms_alat_pabrik_plan)
            ];
            $this->chart_ms_real = [
                ($chart->ms_genset_real + $chart->ms_alat_pabrik_real)
            ];
            $this->chart_ms_ach = [
                Number::format(($chart->ms_genset_plan != 0 ? $chart->ms_genset_real / $chart->ms_genset_plan : 0)
                    + ($chart->ms_alat_pabrik_plan != 0 ? $chart->ms_alat_pabrik_real / $chart->ms_alat_pabrik_plan : 0), 2),
            ];

            // Chart INF
            $this->chart_inf_plan = [
                ($chart->inf_alat_berat_plan + $chart->inf_dt_infras_plan + $chart->inf_pompa_genset_plan +
                    $chart->inf_unit_umum_plan)
            ];
            $this->chart_inf_real = [
                ($chart->inf_alat_berat_real + $chart->inf_dt_infras_real + $chart->inf_pompa_genset_real + $chart->inf_unit_umum_real)
            ];
            $this->chart_inf_ach = [
                Number::format(($chart->inf_alat_berat_plan != 0 ? $chart->inf_alat_berat_real /
                        $chart->inf_alat_berat_plan : 0)
                    + ($chart->inf_dt_infras_plan != 0 ? $chart->inf_dt_infras_real / $chart->inf_dt_infras_plan : 0)
                    + ($chart->inf_pompa_genset_plan != 0 ? $chart->inf_pompa_genset_real /
                        $chart->inf_pompa_genset_plan
                        : 0)
                    + ($chart->inf_unit_umum_plan != 0 ? $chart->inf_unit_umum_real / $chart->inf_unit_umum_plan : 0)
                    , 2)
            ];
        }
    }

    public function render()
    {
        $this->updateChartData();
        return view('livewire.solar.solar-chart');
    }
}
