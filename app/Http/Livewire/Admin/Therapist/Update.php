<?php

namespace App\Http\Livewire\Admin\Therapist;

use App\Models\Therapist;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $therapist;

    
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'profession' => 'required',        
    ];

    public function mount(Therapist $Therapist){
        $this->therapist = $Therapist;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Therapist') ]) ]);
        
        $this->therapist->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.therapist.update', [
            'therapist' => $this->therapist
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Therapist') ])]);
    }
}
