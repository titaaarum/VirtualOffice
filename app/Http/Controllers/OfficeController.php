<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfficeModel;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = OfficeModel::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register()
    {
        $data = OfficeModel::all();
        return view('register', compact('data'));
    }

    public function detailvo()
    {
        return view('detailvo', compact('data'));
    }

    public function detailco()
    {
        return view('detailco', compact('data'));
    }

    public function detailmeet()
    {
        return view('detailmeet', compact('data'));
    }

    public function booking()
    {
        return view('booking', compact('data'));
    }
    
    public function descco()
    {
        return view('descco', compact('data'));
    }
    
    public function seeall()
    {
        return view('seeall', compact('data'));
    }

    public function seeallmeet()
    {
        return view('seeallmeet', compact('data'));
    }

    public function seeallvo()
    {
        return view('seeallvo', compact('data'));
    }
}
