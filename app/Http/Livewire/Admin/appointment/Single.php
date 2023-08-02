<?php

namespace App\Http\Livewire\Admin\Appointment;

use App\Models\Appointment;
use Livewire\Component;

class Single extends Component
{

    public $appointment;

    public function mount(Appointment $Appointment){
        $this->appointment = $Appointment;
    }

    public function delete()
    {
        $this->appointment->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Appointment') ]) ]);
        $this->emit('appointmentDeleted');
    }

    public function render()
    {
        return view('livewire.admin.appointment.single')
            ->layout('admin::layouts.app');
    }
}
