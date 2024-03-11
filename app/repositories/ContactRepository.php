<?php

namespace App\ContactRepositories;

use App\Models\Contact;

class ContactRepository
{
    public function getAll(){
        $contact = Contact::orderBy('name')
        ->where('active', 1)
        ->where('number', 'like', '+%')
        ->get()
        ->map(function ($contact) {
            return [
                'contact_id' => $contact->id,
                'name' => $contact->name,
                'status' => $contact->active ? "Active" : "Inactive", 
            ];
        });
        
        return $contact;
    }
} 