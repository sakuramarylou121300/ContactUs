<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\Contact;
use Livewire\WithPagination;

class ContactUs extends Component
{

    use WithPagination;

    // THIS IS FOR THE VALIDATION
    #[Rule('required|email|max:255')]
    public $email;

    #[Rule('required|min:5|max:255')]
    public $subject;

    #[Rule('required|min:3')]
    public $your_message;

    public function render()
    {
        return view('livewire.contact-us');
    }

    public function create(){

        // // THIS IS THE AJAX REQUEST
        // sleep(1);
        // VALIDATE 
        $validate = $this->validate();

        $contact = Contact::create($validate);

        // REMOVE VALUES AFTER CREATE
        $this->reset('email', 'subject', 'your_message');

        // GIVE MESSAGE AFTER CREATE
        session()->flash('success', 'User Created!');

        // // RESET PAGE AFTER, GO TO FIRST PAGE
        // $this->resetPage();

        // $this->dispatch('contact-created', $contact);
    }
}
