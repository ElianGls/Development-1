<?php

namespace App\Http\Controllers;

use App\Models\Advisor;
use Illuminate\Http\Request;

/**
 * Class AdvisorController
 * @package App\Http\Controllers
 */
class AdvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisors = Advisor::paginate();

        return view('advisor.index', compact('advisors'))
            ->with('i', (request()->input('page', 1) - 1) * $advisors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisor = new Advisor();
        return view('advisor.create', compact('advisor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Advisor::$rules);

        $advisor = Advisor::create($request->all());

        return redirect()->route('advisors.index')
            ->with('success', 'Advisor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advisor = Advisor::find($id);

        return view('advisor.show', compact('advisor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advisor = Advisor::find($id);

        return view('advisor.edit', compact('advisor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Advisor $advisor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advisor $advisor)
    {
        request()->validate(Advisor::$rules);

        $advisor->update($request->all());

        return redirect()->route('advisors.index')
            ->with('success', 'Advisor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $advisor = Advisor::find($id)->delete();

        return redirect()->route('advisors.index')
            ->with('success', 'Advisor deleted successfully');
    }
}
