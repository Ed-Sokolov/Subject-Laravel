<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        /** @var Collection<Contact> $contacts */
        $contacts = Contact::query()->latest()->get();

        return view('contact.index', compact('contacts'));
    }
}
