<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Kaiwa;
use App\Models\suberu;
use App\Models\nagomu;
use App\Models\sekens;
use App\Models\warai;
use App\Models\saegiru;

class KaiwaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contents = index::inRandomOrder()->first();
        // return view('kaiwa.index')->with('contents', $contents->contents);
        return view('kaiwa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contents=saegiru::inRandomOrder()->first();
        return view('kaiwa.create')->with('contents', $contents->contents);
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

    public function cat()
    {
        $contents = suberu::inRandomOrder()->first();

        // dd($contents->contents);
        // exit;

        return view('cat')->with('contents', $contents->contents);
    }


    public function nagomu()
    {
        $contents = nagomu::inRandomOrder()->first();
        return view('nagomu')->with('contents', $contents->contents);
    }

    public function sekens()
    {
        $contents = sekens::inRandomOrder()->first();
        return view('sekens')->with('contents', $contents->contents);
    }

    
    public function warai()
    {
        $contents = warai::inRandomOrder()->first();
        return view('warai')->with('contents', $contents->contents);
    }
}

