<?php

namespace App\Livewire\Forms;

use App\Models\Solar;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SolarForm extends Form
{
    #[Validate('required|min:1|max:5')]
    public $wm_alat_berat_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_alat_berat_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_dt_infras_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_dt_infras_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_pompa_genset_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_pompa_genset_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_unit_umum_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $wm_unit_umum_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $tp_dt_transport_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $tp_dt_transport_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $tp_dt_infras_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $tp_dt_infras_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $rt_alat_rawat_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $rt_alat_rawat_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $rt_alat_tankos_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $rt_alat_tankos_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $ms_genset_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $ms_genset_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $ms_alat_pabrik_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $ms_alat_pabrik_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_alat_berat_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_alat_berat_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_dt_infras_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_dt_infras_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_pompa_genset_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_pompa_genset_real = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_unit_umum_plan = '0.';
    #[Validate('required|min:1|max:5')]
    public $inf_unit_umum_real = '0.';

    #[Validate('required')]
    public $created_at;

    public ?Solar $solar;

    public function setSolar(Solar $solar)
    {
        $this->solar = $solar;
        $this->wm_alat_berat_plan = $solar->wm_alat_berat_plan;
        $this->wm_alat_berat_real = $solar->wm_alat_berat_real;
        $this->wm_dt_infras_plan = $solar->wm_dt_infras_plan;
        $this->wm_dt_infras_real = $solar->wm_dt_infras_real;
        $this->wm_pompa_genset_plan = $solar->wm_pompa_genset_plan;
        $this->wm_pompa_genset_real = $solar->wm_pompa_genset_real;
        $this->wm_unit_umum_plan = $solar->wm_unit_umum_plan;
        $this->wm_unit_umum_real = $solar->wm_unit_umum_real;
        $this->tp_dt_transport_plan = $solar->tp_dt_transport_plan;
        $this->tp_dt_transport_real = $solar->tp_dt_transport_real;
        $this->tp_dt_infras_plan = $solar->tp_dt_infras_plan;
        $this->tp_dt_infras_real = $solar->tp_dt_infras_real;
        $this->rt_alat_rawat_plan = $solar->rt_alat_rawat_plan;
        $this->rt_alat_rawat_real = $solar->rt_alat_rawat_real;
        $this->rt_alat_tankos_plan = $solar->rt_alat_tankos_plan;
        $this->rt_alat_tankos_real = $solar->rt_alat_tankos_real;
        $this->ms_genset_plan = $solar->ms_genset_plan;
        $this->ms_genset_real = $solar->ms_genset_real;
        $this->ms_alat_pabrik_plan = $solar->ms_alat_pabrik_plan;
        $this->ms_alat_pabrik_real = $solar->ms_alat_pabrik_real;
        $this->inf_alat_berat_plan = $solar->inf_alat_berat_plan;
        $this->inf_alat_berat_real = $solar->inf_alat_berat_real;
        $this->inf_dt_infras_plan = $solar->inf_dt_infras_plan;
        $this->inf_dt_infras_real = $solar->inf_dt_infras_real;
        $this->inf_pompa_genset_plan = $solar->inf_pompa_genset_plan;
        $this->inf_pompa_genset_real = $solar->inf_pompa_genset_real;
        $this->inf_unit_umum_plan = $solar->inf_unit_umum_plan;
        $this->inf_unit_umum_real = $solar->inf_unit_umum_real;
        $this->created_at = $solar->created_at;
    }


    public function store(): void
    {
        $this->validate();
        Solar::create($this->all());
        $this->reset();
    }

    public function update()
    {
        $this->validate();
        $this->solar->update($this->all());
        $this->reset();
    }
}
