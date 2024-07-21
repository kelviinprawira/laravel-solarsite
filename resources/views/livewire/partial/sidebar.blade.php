<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content space-y-4 border-r-2 border-base-300">
    <li>
        <a href="{{route('home')}}" class="flex items-center justify-center">
            <img src="{{asset('images/logo.png')}}" alt="logo">
        </a>
    </li>
    <li>
        <h2 class="menu-title">Dashboard</h2>
        <ul>
            <li>
                <a href="{{route('solar')}}" @class(['active' => Route::is('solar')]) wire:navigate>
                    <x-tabler-gas-station class="size-5"/>
                    <span>Solar</span>
                </a>
            </li>
        </ul>
    </li>
    @role('admin')
    <li>
        <h2 class="menu-title">Data Master</h2>
        <ul>
            <li>
                <a href="{{route('master.index')}}" @class(['active' => Route::is('solar.index')]) wire:navigate>
                    <x-tabler-gas-station class="size-5"/>
                    <span>Data Master Solar</span>
                </a>
            </li>
        </ul>
    </li>
    @endrole
    <li>
        <h2 class="menu-title">Account</h2>
        <ul>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5"/>
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
