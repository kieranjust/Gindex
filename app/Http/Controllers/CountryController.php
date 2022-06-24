<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Distillery;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(10);
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $country = Country::create([
            'name' => $request->input('name')
        ]);
        $message = ['success', "{$country->name} Added Successfully"];

        return redirect(route('countries.index'))->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.countries.update', compact(['country']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        if ($request->input('name') !== $country->name) {
            $country->name = $request->input('name');
        }

        $country->save();
        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $message = ['error' => "Please remove any distilleries from {$country->name}"];

        $distilleries = Distillery::where("country_id", $country->id)->get()->count();
        if ($distilleries == 0) {
            $message = ['success', "{$country->name} Deleted Successfully"];
            $country->delete();
        }

        return redirect(route('countries.index'))->with($message);
    }
}
