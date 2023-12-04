<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Comment::query()->create([
            'user_name'     => $data['name'],
            'user_email'    => $data['email'],
            'content'       => $data['content'],
        ]);

        return redirect()->route('comment.index');
    }
}
