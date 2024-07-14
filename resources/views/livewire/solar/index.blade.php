<div class="container p-2 mx-auto space-y-6">
    <div class="flex flex-col justify-between md:flex-row">
        <form action="{{route('solar')}}" method="get">
            <input type="date" class="text-white bg-green-500 input input-bordered" name="date" value="{{$date}}">
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
        @role('admin')
        <button href="#" class="btn btn-primary" wire:click="$dispatch('createSolar')">
            <x-tabler-plus class="size5"/>
            <span>Tambah Data</span>
        </button>
        @endrole
    </div>
    <div class="grid grid-cols-2">
        <div class="w-full table-wrapper h-fit">
            <table class="table bordered">
                <thead class="">
                <tr>
                    <th rowspan="4" class="text-2xl text-center text-black">BAGIAN</th>
                    <th colspan="10" class="text-2xl text-center text-black">TAHUN
                        {{\Illuminate\Support\Facades\Date::now()
                    ->format
                    ('Y')
                    }}</th>
                </tr>
                <tr class="text-center">
                    <td colspan="5" class="text-black">MONTH TO DATE</td>
                </tr>
                <tr>
                    <th class="text-center text-black" colspan="10">QUALITY (Liter)</th>
                </tr>
                <tr class="text-center text-black">
                    <td>PLAN</td>
                    <td>REAL</td>
                    <td>ACH</td>

                </tr>
                </thead>
                <tbody>
                <tr class="text-white bg-green-500">
                    <td>WATER MANAGEMENT SYSTEM</td>
                    <td class="text-center">{{$total_wm_plan ?? 0}}</td>
                    <td class="text-center">{{$total_wm_real ?? 0}}</td>
                    <td class="text-center">{{\Illuminate\Support\Number::format($total_wm_ach ?? 0 , 2)}} %</td>

                </tr>
                <tr>
                    <td>ALAT BERAT</td>
                    <td class="text-center">{{$solar->wm_alat_berat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_alat_berat_real ?? 0}}</td>
                    <td class="text-center">{{\Illuminate\Support\Number::format($wm_alat_berat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->wm_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_dt_infras_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($wm_dt_infras_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>POMPA & GENSET</td>
                    <td class="text-center">{{$solar->wm_pompa_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_pompa_genset_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($wm_pompa_genset_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>UNIT UMUM</td>
                    <td class="text-center">{{$solar->wm_unit_umum_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_unit_umum_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($wm_unit_umum_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>TRANSPORT PANEN</td>
                    <td class="text-center">{{$total_tp_plan ?? 0}}</td>
                    <td class="text-center">{{$total_tp_real ?? 0}}</td>
                    <td class="text-center">{{\Illuminate\Support\Number::format($total_tp_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>DT TRANSPORT</td>
                    <td class="text-center">{{$solar->tp_dt_transport_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->tp_dt_transport_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($tp_dt_transport_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->tp_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->tp_dt_infras_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($tp_dt_infras_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>RAWAT</td>
                    <td class="text-center">{{$total_rt_plan ?? 0}}</td>
                    <td class="text-center">{{$total_rt_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($total_rt_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>AlAT RAWAT</td>

                    <td class="text-center">{{$solar->rt_alat_rawat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->rt_alat_rawat_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($rt_alat_rawat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>ALAT TANKOS</td>
                    <td class="text-center">{{$solar->rt_alat_tankos_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->rt_alat_tankos_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($rt_alat_tankos_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>PABRIK</td>
                    <td class="text-center">{{$total_ms_plan ?? 0}}</td>
                    <td class="text-center">{{$total_ms_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($total_ms_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>GENSET</td>
                    <td class="text-center">{{$solar->ms_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->ms_genset_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($ms_genset_ach ?? 0 , 2)}}</td>

                </tr>
                <tr>
                    <td>ALAT PABRIK</td>
                    <td class="text-center">{{$solar->ms_alat_pabrik_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->ms_alat_pabrik_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($ms_alat_pabrik_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>TEKNIK</td>
                    <td class="text-center">{{$total_inf_plan ?? 0}}</td>
                    <td class="text-center">{{$total_inf_plan ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($total_inf_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>ALAT BERAT</td>
                    <td class="text-center">{{$solar->inf_alat_berat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_alat_berat_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($inf_alat_berat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->inf_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_dt_infras_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($inf_dt_infras_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>POMPA & GENSET</td>
                    <td class="text-center">{{$solar->inf_pompa_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_pompa_genset_real ?? 0}}</td>

                    <td class="text-center">{{\Illuminate\Support\Number::format($inf_pompa_genset_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>UNIT UMUM</td>
                    <td class="text-center">{{$solar->inf_unit_umum_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_unit_umum_real ?? 0}}</td>
                    <td class="text-center">{{\Illuminate\Support\Number::format($inf_unit_umum_ach ?? 0, 2)}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div>
            <livewire:solar.solar-chart :date="$date"/>
        </div>
    </div>
    <livewire:solar.create/>
</div>



