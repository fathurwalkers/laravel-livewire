<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactIndex extends Component
{
    public $contacts;

    public function render()
    {
        $this->contacts = Contact::latest()->get();
        return view('livewire.contact-index');
    }
}
