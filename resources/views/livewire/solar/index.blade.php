<div class="container p-2 mx-auto space-y-6">
    <div class="flex flex-col justify-start md:flex-row lg:flex-row  gap-5">
        <form action="{{route('solar')}}" method="get">
            <input type="date" class="text-white bg-green-500 input input-bordered" name="date" value="{{$date}}">
            <button type="submit" class="btn btn-primary">
                <span>CARI DATA</span>
            </button>
        </form>
        <div class="gap-5">
            <a href="{{ route('solar') }}" wire:navigate class="btn btn-success text-white">DASHBOARD</a>
            <a href="{{ route('master.index') }}" wire:navigate class="btn btn-info text-white">DATA MASTER</a>
        </div>
        <div>
            <p class="btn btn-success text-white">TOTAL GLOBAL PLAN : <span class="font-extrabold text-xl
            ">{{$total_global_plan ?? 0
            }}</span></p>
            <p class="btn btn-success text-white">TOTAL GLOBAL REAL : <span class="font-extrabold text-xl
            ">{{$total_global_real ?? 0
            }}</span></p>
        </div>
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
                    <td class="text-center">{{number_format($total_wm_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>ALAT BERAT</td>
                    <td class="text-center">{{$solar->wm_alat_berat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_alat_berat_real ?? 0}}</td>
                    <td class="text-center">{{number_format($wm_alat_berat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->wm_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_dt_infras_real ?? 0}}</td>
                    <td class="text-center">{{number_format($wm_dt_infras_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>POMPA & GENSET</td>
                    <td class="text-center">{{$solar->wm_pompa_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_pompa_genset_real ?? 0}}</td>

                    <td class="text-center">{{number_format($wm_pompa_genset_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>UNIT UMUM</td>
                    <td class="text-center">{{$solar->wm_unit_umum_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->wm_unit_umum_real ?? 0}}</td>

                    <td class="text-center">{{number_format($wm_unit_umum_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>TRANSPORT</td>
                    <td class="text-center">{{$total_tp_plan ?? 0}}</td>
                    <td class="text-center">{{$total_tp_real ?? 0}}</td>
                    <td class="text-center">{{number_format($total_tp_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>DT TRANSPORT</td>
                    <td class="text-center">{{$solar->tp_dt_transport_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->tp_dt_transport_real ?? 0}}</td>
                    <td class="text-center">{{number_format($tp_dt_transport_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->tp_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->tp_dt_infras_real ?? 0}}</td>

                    <td class="text-center">{{number_format($tp_dt_infras_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>RAWAT</td>
                    <td class="text-center">{{$total_rt_plan ?? 0}}</td>
                    <td class="text-center">{{$total_rt_real ?? 0}}</td>
                    <td class="text-center">{{number_format($total_rt_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>AlAT RAWAT</td>
                    <td class="text-center">{{$solar->rt_alat_rawat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->rt_alat_rawat_real ?? 0}}</td>
                    <td class="text-center">{{number_format($rt_alat_rawat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>ALAT TANKOS</td>
                    <td class="text-center">{{$solar->rt_alat_tankos_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->rt_alat_tankos_real ?? 0}}</td>

                    <td class="text-center">{{number_format($rt_alat_tankos_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>PABRIK</td>
                    <td class="text-center">{{$total_ms_plan ?? 0}}</td>
                    <td class="text-center">{{$total_ms_real ?? 0}}</td>
                    <td class="text-center">{{number_format($total_ms_ach ?? 0 , 2)}} %</td>

                </tr>
                <tr>
                    <td>GENSET</td>
                    <td class="text-center">{{$solar->ms_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->ms_genset_real ?? 0}}</td>
                    <td class="text-center">{{number_format($ms_genset_ach ?? 0 , 2)}}</td>

                </tr>
                <tr>
                    <td>ALAT PABRIK</td>
                    <td class="text-center">{{$solar->ms_alat_pabrik_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->ms_alat_pabrik_real ?? 0}}</td>
                    <td class="text-center">{{number_format($ms_alat_pabrik_ach ?? 0, 2)}}</td>

                </tr>
                <tr class="text-white bg-green-500">
                    <td>TEKNIK</td>
                    <td class="text-center">{{$total_inf_plan ?? 0}}</td>
                    <td class="text-center">{{$total_inf_real ?? 0}}</td>
                    <td class="text-center">{{number_format($total_inf_ach ?? 0, 2)}} %</td>

                </tr>
                <tr>
                    <td>ALAT BERAT</td>
                    <td class="text-center">{{$solar->inf_alat_berat_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_alat_berat_real ?? 0}}</td>
                    <td class="text-center">{{number_format($inf_alat_berat_ach ?? 0, 2)}}</td>

                </tr>
                <tr>
                    <td>DT INFRAS</td>
                    <td class="text-center">{{$solar->inf_dt_infras_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_dt_infras_real ?? 0}}</td>
                    <td class="text-center">{{number_format($inf_dt_infras_ach ?? 0, 2)}}</td>
                </tr>
                <tr>
                    <td>POMPA & GENSET</td>
                    <td class="text-center">{{$solar->inf_pompa_genset_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_pompa_genset_real ?? 0}}</td>
                    <td class="text-center">{{number_format($inf_pompa_genset_ach ?? 0, 2)}}</td>
                </tr>
                <tr>
                    <td>UNIT UMUM</td>
                    <td class="text-center">{{$solar->inf_unit_umum_plan ?? 0}}</td>
                    <td class="text-center">{{$solar->inf_unit_umum_real ?? 0}}</td>
                    <td class="text-center">{{number_format($inf_unit_umum_ach  ?? 0, 2)}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div>
            <livewire:solar.solar-chart :date="$date"/>
        </div>
    </div>
</div>



