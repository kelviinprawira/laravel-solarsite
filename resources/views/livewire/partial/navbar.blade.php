<div class="navbar bg-base-100 border-b-2 border-base-300 print:hidden">
    <div class="navbar-start">
        <label for="drawer" class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5"/>
        </label>
    </div>
    <div class="navbar-center">
        <a href="{{route('home')}}" class="btn btn-ghost text-xl" wire:navigate>{{config('app.name')}}</a>
    </div>
    <div class="navbar-end">
        <div class="font-bold text-sm text-black-500">{{ \Illuminate\Support\Str::upper(auth()->user()->username) }} -
        </div>
        <div class="pr-3 ml-2">{{\Carbon\Carbon::now()->format('j F, Y')}}</div>
    </div>
</div>
