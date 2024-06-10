<div class="page-wrapper">
    <div class="flex flex-col md:flex-row justify-start gap-2">
        <input type="date" class="input input-bordered cursor-pointer" placeholder="pencarian"
               wire:model.live="search">
        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-plus class="size5"/>
            <span>Export Data</span>
        </button>
    </div>
    <div class="table-wrapper scrollbar-hide">
        <table>
            <tr>
                <td rowspan="11" class="row-[span_16/_span_16]">Cell 1</td>
                <td class="text-center flex justify-center">Cell 2</td>
            </tr>
            <tr>
                <td>Cell 3</td>
            </tr>
        </table>
        {{--        <table class="table bordered">--}}
        {{--            <thead>--}}
        {{--            <tr>--}}
        {{--                <th rowspan="2">Bagian</th>--}}
        {{--                <th>Tahun {{\Carbon\Carbon::now()->format('Y')}}</th>--}}
        {{--                <th>Bulan ini</th>--}}
        {{--                <th>sampai bulan ini</th>--}}
        {{--                <th>Quality</th>--}}
        {{--            </tr>--}}
        {{--            <tr>--}}
        {{--                <th class="text-center">PLAN</th>--}}
        {{--                <th class="text-center">REAL</th>--}}
        {{--                <th class="text-center">REAL TH LALU</th>--}}
        {{--                <th class="text-center">ACH</th>--}}
        {{--                <th class="text-center">GROW</th>--}}
        {{--                <th class="text-center">PLAN</th>--}}
        {{--                <th class="text-center">REAL</th>--}}
        {{--                <th class="text-center">REAL TH LALU</th>--}}
        {{--                <th class="text-center">ACH</th>--}}
        {{--                <th class="text-center">Plasma</th>--}}
        {{--                <th class="text-center">GROW</th>--}}
        {{--            </tr>--}}
        {{--            </thead>--}}
        {{--        </table>--}}
    </div>
</div>

