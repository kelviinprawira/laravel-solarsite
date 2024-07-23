<div class="navbar bg-green-600 border-b-2 border-base-300 print:hidden">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle text-white">
            <x-tabler-menu class="size-5"/>
        </label>
    </div>
    <div class="navbar-center">
        <a href="{{route('solar')}}" class="btn btn-ghost text-3xl font-extrabold text-white" wire:navigate>SELAMAT
            DATANG DI
            DASHBOARD
            SOLAR</a>
    </div>
    <div class="navbar-end text-white">
        <div class="font-bold text-sm text-black-500">{{ \Illuminate\Support\Str::upper(auth()->user()->username)}} -
        </div>
        <div class="pr-3 ml-2">{{\Carbon\Carbon::now()->format('j F Y')}}</div>
        <button wire:click="logout" class="btn btn-error flex justify-end gap-2 text-white">
            <span>Logout</span>
            <x-tabler-logout class="size-5"/>
        </button>
    </div>
</div>
