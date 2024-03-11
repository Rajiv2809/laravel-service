<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\ContactRepositories\ContactRepository;


class ContactController extends Controller
{
    private $contactRespository;
    public function __construct(ContactRepository $contactrepository)
    {
        $this->contactRespository = $contactrepository;
    }

    public function index(){
        $contact = $this->contactRespository->getAll();
        return $contact;
    }
}
