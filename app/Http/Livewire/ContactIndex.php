<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;
use Livewire\WithPagination;

class ContactIndex extends Component
{
    use WithPagination;
    // public $contacts;

    protected $listeners = [
        'contactStored' => 'handleStored'
    ];

    public function render()
    {
        // $this->contacts = Contact::latest()->paginate(5);
        return view('livewire.contact-index', [
            'contacts' => Contact::latest()->paginate(5)
        ]);
    }

    public function handleStored($contact)
    {
        // dd($contact);
        session()->flash('berhasil_store', 'Kontak ' . $contact['name'] . ' berhasil di input!');
    }
}
