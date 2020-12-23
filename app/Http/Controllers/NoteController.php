<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function store()
    {
        $this->validate(request(), [
            'body' => 'required|max:255'
        ]);

        auth()->user()->notes()->create(request()->only('body'));

        return back()->withSuccess('Note has been created successfully');
    }
}
