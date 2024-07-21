<?php

namespace App\Livewire\Solar;

use App\Livewire\Forms\SolarForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public $show = false;
    public SolarForm $form;


    #[On('createSolar')]
    public function createSolar()
    {
        $this->show = true;
    }

    public function closeModal(): void
    {
        $this->show = false;
        $this->form->reset();
    }

    public function simpan(): void
    {
        $this->form->store();
        $this->alert('success', 'Solar Data', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
            'text' => 'Berhasil Menambahkan Data',
        ]);
        $this->closeModal();
        $this->redirect(route('solar'), true);
    }

    public function render()
    {
        return view('livewire.solar.create');
    }
}
