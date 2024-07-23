<div class="page-wrapper">
    <div class="flex flex-col justify-end gap-2 md:flex-row">
        <div class="flex flex-col justify-between gap-4 md:flex-row">
            <button class="btn btn-primary" wire:click="$dispatch('createSolar')">
                <x-tabler-plus class="size-5"/>
                <span>Tambah Data</span>
            </button>
        </div>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead class="text-center">
            <th>No</th>
            <th>Tanggal Input</th>
            <th class="justify-end">Actions</th>
            </thead>
            <tbody class="text-center">
            @foreach($solar as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('j F Y')}}</td>
                    <td>
                        <div class="flex justify-center gap-5">
                            <button class="btn btn-primary" wire:click="$dispatch('editSolar', {solar: {{$item->id}}})">
                                <x-tabler-edit class="size-4"/>
                                <span>Edit</span>
                            </button>
                            <button class="btn btn-error text-white"
                                    wire:click="$dispatch('deleteSolar', {solar: {{$item->id}}})">
                                <x-tabler-trash class="size-4"/>
                                <span>Delete</span>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="m-3">
            {{ $solar->links('pagination::tailwind') }}
        </div>
    </div>
    <livewire:master.solar-actions/>
    <livewire:solar.create/>
</div>
