<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $p = Student::all();
        return view('ECSD.student', compact('p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $newpost = Student::create([
            'Noms' => $request->noms,
            'Age_Spirituel' => $request->agesp,
            'Ville' => $request->ville,
            'Age' => $request->age,
            'Matricule' => $request->matricule,
            'Province_Spirituel' => $request->province,
        ]);
        return view("ECSD.student");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function apiStudent()
    {
        $article = Student::all();
        return DataTables::of($article)
            ->addColumn('action', function ($article) {
                return
                    '<a onclick="edit(' . $article->id . ')" class="btn btn-primary btn-xs"> <i class="fa fa-edit"></i> visualiser</a>';
            })->make(true);
    }

}
