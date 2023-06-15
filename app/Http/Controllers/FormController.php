<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    /**
     * Show the form to create a new blog post.
     */
    public function create(): View
    {
        return view('form.create');
    }

    /**
     * Store a new blog post.
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'name' => 'required',
            'thud' => 'required',
            'skwal' => 'required',
            'wombat' => 'required',
        ]);

        $article = new Form();
        $article->name = request('name');
        $article->thud = request('thud');
        $article->skwal = request('skwal');
        $article->wombat = request('wombat');
        $article->save();

        return redirect('/form');
    }
}
