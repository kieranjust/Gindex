<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Distillery;
use App\Models\Gin;
use Illuminate\Http\Request;

class DistilleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $distilleries = Distillery::paginate(25);
        return view('admin.distilleries.index', compact('distilleries', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.distilleries.create', compact(['countries']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Distillery::create([
            'name' => $request->input('name'),
            'country_id' => $request->input('country'),
        ]);
        return redirect(route('distilleries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Distillery $distillery)
    {
        $gins = Gin::where('distillery_id',$distillery->id)->get();

        return view('admin.distilleries.show', compact('distillery', 'gins'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Distillery $distillery)
    {
        $countries = Country::all();
        return view('admin.distilleries.update', compact(['distillery', 'countries']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distillery $distillery)
    {
        if($request->input('name') !== $distillery->name)
        {
            $distillery->name = $request->input('name');
        }
        if($request->input('country') !== $distillery->country_id)
        {
            $distillery->country_id = $request->input('country');
        }

        $distillery->save();

        return redirect(route('distilleries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distillery $distillery)
    {

        $message = ['error'=>"Please remove any gins from {$distillery->name}"];

        $gins = Gin::where("distillery_id",$distillery->id)->get()->count();

        if ($gins==0) {
            $message = ['success',"{$distillery->name} Deleted Successfully"];
            $distillery->delete();
        }

        return redirect(route('distilleries.index'))->with($message);
    }
}
