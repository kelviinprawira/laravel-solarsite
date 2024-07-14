<div>
    <div class="card">
        <form class="card-body items-center" wire:submit="login">
            <h3 class="card-title justify-center">
                Silahkan Login
            </h3>
            <div class="py-4 space-y-2">
                <label @class(['input input-bordered flex items-center gap-2', 'input-error' => $errors->first
                ('username')])>
                    <x-tabler-user class="size-5"/>
                    <input type="text" class="grow" placeholder="Username" wire:model="username"/>
                </label>
                <label @class(['input input-bordered flex items-center gap-2', 'input-error' => $errors->first
                ('password')])>
                    <x-tabler-key class="size-5"/>
                    <input type="password" class="grow" wire:model="password" placeholder="password"/>
                </label>
            </div>
            <div class="card-actions justify-between">
                <button class="btn btn-primary">
                    <x-tabler-login class="size-5"/>
                    <span>Login</span>
                </button>
            </div>
        </form>
    </div>
</div>
