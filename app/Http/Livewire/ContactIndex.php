<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactIndex extends Component
{
    public $contacts;

    protected $listeners = [
        'contactStored' => 'handleStored'
    ];

    public function render()
    {
        $this->contacts = Contact::latest()->get();
        return view('livewire.contact-index');
    }

    public function handleStored($contact)
    {
        //
    }
}
