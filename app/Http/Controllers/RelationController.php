<?php

namespace App\Http\Controllers;

use App\Models\Relation;
use Illuminate\Http\Request;

/**
 * Class RelationController
 * @package App\Http\Controllers
 */
class RelationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = Relation::paginate();

        return view('relation.index', compact('relations'))
            ->with('i', (request()->input('page', 1) - 1) * $relations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relation = new Relation();
        return view('relation.create', compact('relation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Relation::$rules);

        $relation = Relation::create($request->all());

        return redirect()->route('relations.index')
            ->with('success', 'Relation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relation = Relation::find($id);

        return view('relation.show', compact('relation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relation = Relation::find($id);

        return view('relation.edit', compact('relation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Relation $relation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relation $relation)
    {
        request()->validate(Relation::$rules);

        $relation->update($request->all());

        return redirect()->route('relations.index')
            ->with('success', 'Relation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $relation = Relation::find($id)->delete();

        return redirect()->route('relations.index')
            ->with('success', 'Relation deleted successfully');
    }
}
