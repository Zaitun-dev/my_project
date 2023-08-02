<?php

namespace App\Http\Livewire\Admin\Therapist;

use App\Models\Therapist;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'profession' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Therapist') ])]);
        
        Therapist::create([
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.therapist.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Therapist') ])]);
    }
}
