<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($form_data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $this->validation($request->all());
        $comic->update($form_data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required|max:50',
            'type' => 'required|min:1|max:50',
        ], [
            'title.required' => 'Il nome ?? richiesto',
            'title.max:50' => 'Il nome ?? troppo lungo',
            'description.required' => 'La descrizzione ?? richiesta',
            'thumb.required' => "L'imaggine ?? richiesta",
            'price.required' => 'Il prezzo ?? richiesto',
            'price.max:50' => 'Il prezzo ?? troppo alto',
            'type.required' => 'Il tipo ?? richiesto',
            'type.max:50' => 'Il tipo ?? troppo lungo'

        ])->validate();
        return $validator;
    }
}
