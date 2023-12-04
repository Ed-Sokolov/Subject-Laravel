<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Contact::query()->create([
            'user_name'     => $data['name'],
            'user_email'    => $data['email'],
            'content'       => $data['content'],
        ]);

        return redirect()->route('contact.index');
    }
}
