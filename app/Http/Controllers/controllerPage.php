<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\page;

class controllerPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $request)
    {
        // $pages = Page::all();
        $ntu = $request['data1'];
        $doValue = $request['data2'];
        $kadarGaram = $request['data3'];



        $page = page::create([
            'NTU' => $ntu,
            'doValue' => $doValue,
            'kadarGaram' => $kadarGaram,
        ]);
        
        
        $page->save();

        return Response::json(array(
            'status' => 'success',
            'NTU' => $ntu,
            'doValue' => $doValue,
            'kadarGaram' => $kadarGaram
        ),200
        );
        // return Response::json("success",201);
    }
    public function ntu()
    {
        $data_all= page::all();
        // dd($data_all);
        return view('ntu',compact('data_all'));
    }

    public function doValue()
    {
        $data_all= page::all();
        // dd($data_all);
        return view('doValue',compact('data_all'));
    }
    
    public function kadarGaram()
    {
        $data_all= page::all();
        // dd($data_all);
        return view('kadarGaram',compact('data_all'));
    }
    
    public function location()
    {
        return view('location');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function profile()
    {
        return view('profile');
    }

    public function index()
    {
        $data_all= page::all();
        // dd($data_all);
        return view('index',compact('data_all'));
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
}
