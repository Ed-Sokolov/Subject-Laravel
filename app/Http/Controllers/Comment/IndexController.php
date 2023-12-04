<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        /** @var LengthAwarePaginator<Comment> $contacts */
        $comments = Comment::query()->latest()->paginate(3);

        return view('comment.index', compact('comments'));
    }
}
