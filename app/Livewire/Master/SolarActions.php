<?php

namespace App\Livewire\Master;

use App\Livewire\Forms\SolarForm;
use App\Models\Solar;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class SolarActions extends Component
{
    use LivewireAlert;

    public $show = false;
    public SolarForm $form;

    #[On('editSolar')]
    public function editSolar(Solar $solar): void
    {
        $this->form->setSolar($solar);
        $this->show = true;
    }

    public function closeModal(): void
    {
        $this->show = false;
        $this->form->reset();
    }

    public function save(): void
    {
        $this->form->update();
        $this->alert('success', 'Solar', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => 'Data berhasil diubah',
            'timerProgressBar' => true,
        ]);
        $this->closeModal();
        $this->redirect(route('master.index'), true);
    }

    #[On('deleteSolar')]
    public function deleteSolar(Solar $solar)
    {
        $solar->delete();
        $this->alert('success', 'Solar', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'text' => 'Data Berhasil Dihapus',
            'timerProgressBar' => true,
        ]);
        $this->redirect(route('master.index'), true);
    }

    public function render()
    {
        return view('livewire.master.solar-actions');
    }
}
