<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $contact;

    public $name;
    public $email;
    public $subject;
    public $message;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',        
    ];

    public function mount(Contact $Contact){
        $this->contact = $Contact;
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->subject = $this->contact->subject;
        $this->message = $this->contact->message;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Contact') ]) ]);
        
        $this->contact->update([
            'name' => $this->name,            'email' => $this->email,
            'subject' => $this->subject,            'message' => $this->message,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.contact.update', [
            'contact' => $this->contact
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Contact') ])]);
    }
}
