<?php

namespace App\Http\Livewire\Admin\Appointment;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $appointment_date;
    public $departement;
    public $contact;
    public $message;
    
    protected $rules = [
        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Appointment') ])]);
        
        Appointment::create([
            'name' => $this->name,            'email' => $this->email,
            'appointment_date' => $this->appointment_date,
            'departement' => $this->departement,            'contact' => $this->contact,            'message' => $this->message,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.appointment.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Appointment') ])]);
    }
}
