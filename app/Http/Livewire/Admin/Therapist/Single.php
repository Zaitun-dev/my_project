<?php

namespace App\Http\Livewire\Admin\Therapist;

use App\Models\Therapist;
use Livewire\Component;

class Single extends Component
{

    public $therapist;

    public function mount(Therapist $Therapist){
        $this->therapist = $Therapist;
    }

    public function delete()
    {
        $this->therapist->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Therapist') ]) ]);
        $this->emit('therapistDeleted');
    }

    public function render()
    {
        return view('livewire.admin.therapist.single')
            ->layout('admin::layouts.app');
    }
}
