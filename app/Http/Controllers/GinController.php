<?php

namespace App\Http\Controllers;

use App\Models\Distillery;
use App\Models\Gin;
use Illuminate\Http\Request;

class GinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gins = Gin::paginate(25);
        return view('admin.gins.index', compact('gins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distilleries = Distillery::all();
        return view('admin.gins.create', compact(['distilleries']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gin::create([
            'name' => $request->input('name'),
            'distillery_id' => $request->input('distillery'),
            'rating' => $request->input('rating'),
            'status' => $request->input('status'),
        ]);
        return redirect(route('gins.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gin $gin)
    {
        return view('admin.gins.show', compact('gin'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gin $gin)
    {
        $distilleries = Distillery::all();
        return view('admin.gins.update', compact(['gin', 'distilleries']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gin $gin)
    {
        if($request->input('name') !== $gin->name)
        {
            $gin->name = $request->input('name');
        }
        if($request->input('distillery') !== $gin->distillery_id)
        {
            $gin->distillery_id = $request->input('distillery');
        }
        if($request->input('rating') !== $gin->rating)
        {
            $gin->rating = $request->input('rating');
        }
        if($request->input('status') !== $gin->status)
        {
            $gin->status = $request->input('status');
        }


        $gin->save();
        return redirect(route('gins.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gin $gin)
    {
        $gin->delete();
        return redirect(route('gins.index'));
    }
}
