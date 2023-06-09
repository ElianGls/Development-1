<?php

namespace App\Http\Controllers;

use App\Models\Modality;
use Illuminate\Http\Request;

/**
 * Class ModalityController
 * @package App\Http\Controllers
 */
class ModalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalities = Modality::paginate();

        return view('modality.index', compact('modalities'))
            ->with('i', (request()->input('page', 1) - 1) * $modalities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modality = new Modality();
        return view('modality.create', compact('modality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modality::$rules);

        $modality = Modality::create($request->all());

        return redirect()->route('modalities.index')
            ->with('success', 'Modality created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modality = Modality::find($id);

        return view('modality.show', compact('modality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modality = Modality::find($id);

        return view('modality.edit', compact('modality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modality $modality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modality $modality)
    {
        request()->validate(Modality::$rules);

        $modality->update($request->all());

        return redirect()->route('modalities.index')
            ->with('success', 'Modality updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modality = Modality::find($id)->delete();

        return redirect()->route('modalities.index')
            ->with('success', 'Modality deleted successfully');
    }
}
