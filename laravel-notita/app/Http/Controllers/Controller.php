<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Prompts\Note;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function notes()
    {
        $notes = Note::all();
        return view('notes', @compact('notes'));
    }

    public function detail($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.detail', @compact('notes'));
    }

    public function create(Request $request)
    {
        $notaNueva = new Note;
        $notaNueva->title = $request->title;
        $notaNueva->description = $request->text;
        $notaNueva->save();
        return back()->with('mensaje', 'Nota agregada exitosamente');
    }

    public function newNote(){
        return view('notes.create');
    }
}

