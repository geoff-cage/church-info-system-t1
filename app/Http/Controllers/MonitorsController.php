<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitor;

class MonitorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitors = Monitor::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.monitors.index')->with('monitors', $monitors);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.monitors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kuhani_mkuu_code' => 'required',
            'jina' => 'required',
            'mawasiliano' => 'required'
        ]);

        //Create a monitor
        $monitor = new Monitor;
        $monitor->kuhani_mkuu_code = $request->input('kuhani_mkuu_code');
        $monitor->jina = $request->input('jina');
        $monitor->mawasiliano = $request->input('mawasiliano');
        $monitor->save();

        return redirect('/getmonitors')->with('success', 'new monitor created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $monitor = Monitor::find($id);
        return view('dashboard.monitors.show')->with('monitor', $monitor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $monitor = Monitor::find($id);
        return view('dashboard.monitors.edit')->with('monitor', $monitor);
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
        $this->validate($request,[
            'kuhani_mkuu_code' =>'required',
            'jina' =>'required',
            'mawasiliano' =>'required'
        ]);

        //update post
        $monitor = Monitor::find($id);
        $monitor->kuhani_mkuu_code = $request->input('kuhani_mkuu_code');
        $monitor->jina = $request->input('jina');
        $monitor->mawasiliano = $request->input('mawasiliano');
        $monitor->save();

        return redirect('/getmonitors')->with('success', 'regional monitor updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $monitor = Monitor::find($id);
        $monitor->delete();

        return redirect('/getmonitors')->with('success', 'regional monitor deleted');
    }
}
