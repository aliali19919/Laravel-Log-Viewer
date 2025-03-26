<?php

namespace App\Http\Controllers;

use App\Models\MyLog;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyLogs extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $totalLogs=MyLog::all()->count();
     $logs=MyLog::all();
     return view("log.index",compact("logs","totalLogs"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $context=$request->context;
        $levelNum=$request->levelNum;
        $level=$request->level;
        $message=$request->message;
        $logs=$request->all();
        Log::$level($message);
        MyLog::create($logs);


   return redirect()->route("logs.index",compact("logs"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $log=MyLog::findOrFail($id);
        return view("log.show",compact("log"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MyLog::findOrFail($id)->delete();
        return redirect()->route("logs.index");
    }
}
