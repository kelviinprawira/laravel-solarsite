<?php

namespace Database\Factories;

use App\Models\Solar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SolarFactory extends Factory
{
    protected $model = Solar::class;

    public function definition(): array
    {
        return [
            'wm_alat_berat_plan' => $this->faker->numberBetween(1, 40),
            'wm_alat_berat_real' => $this->faker->numberBetween(1, 40),
            'wm_dt_infras_plan' => $this->faker->numberBetween(1, 40),
            'wm_dt_infras_real' => $this->faker->numberBetween(1, 40),
            'wm_pompa_genset_plan' => $this->faker->numberBetween(1, 40),
            'wm_pompa_genset_real' => $this->faker->numberBetween(1, 40),
            'wm_unit_umum_plan' => $this->faker->numberBetween(1, 40),
            'wm_unit_umum_real' => $this->faker->numberBetween(1, 40),
            'tp_dt_transport_plan' => $this->faker->numberBetween(1, 40),
            'tp_dt_transport_real' => $this->faker->numberBetween(1, 40),
            'tp_dt_infras_plan' => $this->faker->numberBetween(1, 40),
            'tp_dt_infras_real' => $this->faker->numberBetween(1, 40),
            'rt_alat_rawat_plan' => $this->faker->numberBetween(1, 40),
            'rt_alat_rawat_real' => $this->faker->numberBetween(1, 40),
            'rt_alat_tankos_plan' => $this->faker->numberBetween(1, 40),
            'rt_alat_tankos_real' => $this->faker->numberBetween(1, 40),
            'ms_genset_plan' => $this->faker->numberBetween(1, 40),
            'ms_genset_real' => $this->faker->numberBetween(1, 40),
            'ms_alat_pabrik_plan' => $this->faker->numberBetween(1, 40),
            'ms_alat_pabrik_real' => $this->faker->numberBetween(1, 40),
            'inf_alat_berat_real' => $this->faker->numberBetween(1, 40),
            'inf_alat_berat_plan' => $this->faker->numberBetween(1, 40),
            'inf_dt_infras_real' => $this->faker->numberBetween(1, 40),
            'inf_dt_infras_plan' => $this->faker->numberBetween(1, 40),
            'inf_pompa_genset_plan' => $this->faker->numberBetween(1, 40),
            'inf_pompa_genset_real' => $this->faker->numberBetween(1, 40),
            'inf_unit_umum_plan' => $this->faker->numberBetween(1, 40),
            'inf_unit_umum_real' => $this->faker->numberBetween(1, 40),
        ];
    }
}
