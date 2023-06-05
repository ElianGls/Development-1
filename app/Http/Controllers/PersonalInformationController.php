<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;

/**
 * Class PersonalInformationController
 * @package App\Http\Controllers
 */
class PersonalInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personalInformations = PersonalInformation::paginate();

        return view('personal-information.index', compact('personalInformations'))
            ->with('i', (request()->input('page', 1) - 1) * $personalInformations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personalInformation = new PersonalInformation();
        return view('personal-information.create', compact('personalInformation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PersonalInformation::$rules);

        $personalInformation = PersonalInformation::create($request->all());

        return redirect()->route('personal-informations.index')
            ->with('success', 'PersonalInformation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalInformation = PersonalInformation::find($id);

        return view('personal-information.show', compact('personalInformation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalInformation = PersonalInformation::find($id);

        return view('personal-information.edit', compact('personalInformation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PersonalInformation $personalInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalInformation $personalInformation)
    {
        request()->validate(PersonalInformation::$rules);

        $personalInformation->update($request->all());

        return redirect()->route('personal-informations.index')
            ->with('success', 'PersonalInformation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personalInformation = PersonalInformation::find($id)->delete();

        return redirect()->route('personal-informations.index')
            ->with('success', 'PersonalInformation deleted successfully');
    }
}
