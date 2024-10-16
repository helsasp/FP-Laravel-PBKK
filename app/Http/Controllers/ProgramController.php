<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Edulevel;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $programs = Program::with('edulevel')->simplePaginate(5);
       return view('program/index',compact('programs'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edulevels = Edulevel::all();
        return view('program/create', compact('edulevels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    $request -> validate([
        'name'=> 'required|min:3',
        'edulevel_id'=> 'required',
    ],[
       'edulevel_id.required' => 'The edulevel name is required.'
    ]);
       

    Program::create($request->all());
       return redirect('programs')->with('status', 'Program berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
       
        $program->makeHidden(['edulevel_id']);
       
       return view('program/show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        $edulevels = Edulevel::all();
        return view('program.edit',compact('program','edulevels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $request -> validate([
            'name'=> 'required|min:3',
            'edulevel_id'=> 'required',
        ],[
           'edulevel_id.required' => 'The edulevel name is required.'
        ]);


        Program::where('id', $program->id)
        -> update([
            'name'=> $request -> name,
            'edulevel_id' => $request -> edulevel_id,
            'student_price' => $request -> student_price,
            'student_max' => $request ->student_max,
            'info' => $request -> info,



        ]);
        return redirect('programs')->with('status', 'Program berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        Program::where('id', $program -> id)-> delete();
        return redirect('programs')->with('status', 'Program berhasil dihapus!');

    }
}
