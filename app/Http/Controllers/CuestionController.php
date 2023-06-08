<?php

namespace App\Http\Controllers;

use App\Models\Cuestion;
use Illuminate\Http\Request;

/**
 * Class CuestionController
 * @package App\Http\Controllers
 */
class CuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuestions = Cuestion::paginate();

        return view('cuestion.index', compact('cuestions'))
            ->with('i', (request()->input('page', 1) - 1) * $cuestions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuestion = new Cuestion();
        return view('cuestion.create', compact('cuestion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cuestion::$rules);

        $cuestion = Cuestion::create($request->all());

        return redirect()->route('cuestions.index')
            ->with('success', 'Cuestion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuestion = Cuestion::find($id);

        return view('cuestion.show', compact('cuestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuestion = Cuestion::find($id);

        return view('cuestion.edit', compact('cuestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cuestion $cuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuestion $cuestion)
    {
        request()->validate(Cuestion::$rules);

        $cuestion->update($request->all());

        return redirect()->route('cuestions.index')
            ->with('success', 'Cuestion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cuestion = Cuestion::find($id)->delete();

        return redirect()->route('cuestions.index')
            ->with('success', 'Cuestion deleted successfully');
    }
}
