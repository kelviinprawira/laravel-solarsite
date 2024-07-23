<div>
    <input type="checkbox" class="modal-toggle backdrop-blur-lg" @checked($show)>
    <div class="modal backdrop-filter backdrop-blur-sm" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="text-lg font-bold text-center">Form Input Data Solar</h3>
            <div class="py-4 space-y-2">
                <div class="flex justify-center">
                    <label for="pickphoto" class="avatar">
                        <div class="w-40 rounded-xl">
                            <img src="{{asset('images/logo.png')}}" class="w-30" alt=""/>
                        </div>
                    </label>
                </div>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-blue-500 label-text">WMS</span>
                    </div>
                    <div class="mb-2 text-2xl text-center text-blue-500 label-text">ALAT BERAT</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai"
                           @class(['input input-bordered mb-2','input-error'=> $errors->first('form.wm_alat_berat_plan')])  wire:model="form.wm_alat_berat_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered
                    mb-2',
                    'input-error' =>
                    $errors->first('form.wm_alat_berat_real')]) wire:model="form.wm_alat_berat_real"/>
                    <div class="mb-2 text-2xl text-center text-blue-500 label-text">DT INFRAS</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_dt_infras_plan')]) wire:model="form.wm_dt_infras_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_dt_infras_real')]) wire:model="form.wm_dt_infras_real"/>
                    <div class="mb-2 text-2xl text-center text-blue-500 label-text">POMPA & GENSET</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_pompa_genset_plan')]) wire:model="form.wm_pompa_genset_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_pompa_genset_real')]) wire:model="form.wm_pompa_genset_real"/>
                    <div class="mb-2 text-2xl text-center text-blue-500 label-text">UNIT UMUM</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_unit_umum_plan')]) wire:model="form.wm_unit_umum_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_unit_umum_real')]) wire:model="form.wm_unit_umum_real"/>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-green-500 label-text">TRANSPORT</span>
                    </div>
                    <div class="mb-2 text-2xl text-center text-green-500 label-text">DT TRANSPORT</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.tp_dt_transport_plan')]) wire:model="form.tp_dt_transport_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.tp_dt_transport_real')]) wire:model="form.tp_dt_transport_real"/>
                    <div class="mb-2 text-2xl text-center text-green-500 label-text">DT INFRAS</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.tp_dt_infras_plan')]) wire:model="form.tp_dt_infras_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.tp_dt_infras_real')]) wire:model="form.tp_dt_infras_real"/>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-yellow-500 label-text">RAWAT</span>
                    </div>
                    <div class="mb-2 text-2xl text-center text-yellow-500 label-text">ALAT RAWAT</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.rt_alat_rawat_plan')]) wire:model="form.rt_alat_rawat_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.rt_alat_rawat_real')]) wire:model="form.rt_alat_rawat_real"/>
                    <div class="mb-2 text-2xl text-center text-yellow-500 label-text">ALAT TANKOS</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.rt_alat_tankos_plan')]) wire:model="form.rt_alat_tankos_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.rt_alat_tankos_real')]) wire:model="form.rt_alat_tankos_real"/>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-pink-500 label-text">PABRIK</span>
                    </div>
                    <div class="mb-2 text-2xl text-center text-pink-500 label-text">GENSET</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.ms_genset_plan')]) wire:model="form.ms_genset_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.ms_genset_real')]) wire:model="form.ms_genset_real"/>
                    <div class="mb-2 text-2xl text-center text-pink-500 label-text">ALAT PABRIK</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.ms_alat_pabrik_plan')]) wire:model="form.ms_alat_pabrik_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.ms_alat_pabrik_real')]) wire:model="form.ms_alat_pabrik_real"/>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-indigo-500 label-text">TEKNIK</span>
                    </div>
                    <div class="mb-2 text-2xl text-center text-indigo-500 label-text">ALAT BERAT</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai" @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.wm_alat_berat_plan')]) wire:model="form.inf_alat_berat_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_alat_berat_real')]) wire:model="form.inf_alat_berat_real"/>
                    <div class="mb-2 text-2xl text-center text-indigo-500 label-text">DT INFRAS</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_dt_infras_plan')]) wire:model="form.inf_dt_infras_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_dt_infras_real')]) wire:model="form.inf_dt_infras_real"/>
                    <div class="mb-2 text-2xl text-center text-indigo-500 label-text">POMPA & GENSET</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_pompa_genset_plan')]) wire:model="form.inf_pompa_genset_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_pompa_genset_real')]) wire:model="form.inf_pompa_genset_real"/>
                    <div class="mb-2 text-2xl text-center text-indigo-500 label-text">UNIT UMUM</div>
                    <div class="mb-2 label-text">PLAN</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_unit_umum_plan')]) wire:model="form.inf_unit_umum_plan"/>
                    <div class="mb-2 label-text">REAL</div>
                    <input type="text" placeholder="Masukkan Nilai " @class(['input input-bordered mb-2',
                    'input-error' =>
                    $errors->first('form.inf_unit_umum_real')]) wire:model="form.inf_unit_umum_real"/>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="text-2xl text-indigo-500 label-text">TANGGAL INPUT :</span>
                        <input type="date" value="{{now()->toDateString()}}" @class(['input input-bordered mb-2 w-1/2',
                        'input-error' =>
                    $errors->first('form.created_at')]) wire:model="form.created_at"/>
                    </div>
                </label>
            </div>
            <div class="justify-between modal-action">
                <button type="button" class="btn btn-ghost" wire:click="closeModal">Close</button>
                <button class="btn btn-primary" type="submit">
                    <x-tabler-check class="size-5" wire:loading.remove/>
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
