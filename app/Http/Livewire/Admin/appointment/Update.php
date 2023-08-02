<?php

namespace App\Http\Livewire\Admin\Appointment;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $appointment;

    public $name;
    public $email;
    public $appointment_date;
    public $departement;
    public $contact;
    public $message;
    
    protected $rules = [
        
    ];

    public function mount(Appointment $Appointment){
        $this->appointment = $Appointment;
        $this->name = $this->appointment->name;
        $this->email = $this->appointment->email;
        $this->appointment_date = $this->appointment->appointment_date;
        $this->departement = $this->appointment->departement;
        $this->contact = $this->appointment->contact;
        $this->message = $this->appointment->message;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Appointment') ]) ]);
        
        $this->appointment->update([
            'name' => $this->name,            'email' => $this->email,
            'appointment_date' => $this->appointment_date,
            'departement' => $this->departement,            'contact' => $this->contact,            'message' => $this->message,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.appointment.update', [
            'appointment' => $this->appointment
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Appointment') ])]);
    }
}
