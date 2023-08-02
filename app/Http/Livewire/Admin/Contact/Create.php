<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

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

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Contact') ])]);
        
        Contact::create([
            'name' => $this->name,            'email' => $this->email,
            'subject' => $this->subject,            'message' => $this->message,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.contact.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Contact') ])]);
    }
}
