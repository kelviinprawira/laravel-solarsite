<?php

namespace App\Livewire\Master;

use App\Models\Solar;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Master Solar')]
class SolarIndex extends Component
{
    use WithPagination;

    public $no = 1;

    public function render()
    {
        $solar = Solar::query()->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.master.solar-index', compact('solar'));
    }
}
