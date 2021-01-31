<?php

namespace App\Http\Controllers;
use App\Imports\HumansImport;
use App\Models\Humans;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class HumansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $humans =Humans::all();
        return view('humans.index',['humans'=>$humans]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Excel::import(new HumansImport,$request->file);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Humans  $humans
     * @return \Illuminate\Http\Response
     */
    public function show(Humans $humans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Humans  $humans
     * @return \Illuminate\Http\Response
     */
    public function edit(Humans $humans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $humans=Humans::find($request->id);
        $humans->first_name = $request->first_name ;
        $humans->last_name =  $request->last_name ;
        $humans->address = $request->address ;
        $humans->email = $request->email ;
        $humans->phone = $request->phone ;
        $humans->town = $request->town ;

        $humans->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Humans  $humans
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $humans=Humans::find($id);

        $humans->delete();

        return $this->index();
    }

    public function importForm()
    {
        return view('import-form');
    }

}
