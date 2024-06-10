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
                <a href="{{route('home')}}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-dashboard class="size-5"/>
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Data Master</h2>
        <ul>
            <li>
                <a href="{{route('solar')}}" @class(['active' => Route::is('solar')]) wire:navigate>
                    <x-tabler-gas-station class="size-5"/>
                    <span>Solar</span>
                </a>
            </li>
            <li>
                <a href="#" wire:navigate>
                    <x-tabler-shovel-pitchforks class="size-5"/>
                    <span>Alat Panen</span>
                </a>
            </li>
            <li>
                <a href="#"
                   wire:navigate>
                    <x-tabler-flask-2 class="size-5"/>
                    <span>Herbisida</span>
                </a>
            </li>
            <li>
                <a href="#"
                   wire:navigate>
                    <x-tabler-tool class="size-5"/>
                    <span>Sparepart</span>
                </a>
            </li>
            <li>
                <a href="#"
                   wire:navigate>
                    <x-tabler-plant-2 class="size-5"/>
                    <span>Pupuk</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Account</h2>
        <ul>
            <li>
                <a href="{{route('profile')}}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user class="size-5"/>
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5"/>
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
