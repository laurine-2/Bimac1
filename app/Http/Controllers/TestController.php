<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function showMyTestsPage(Request $request){
       
    //     $tests = Test::where('user_id','=',Auth::user()->id)->get();

    //     //return TestResource::collection($tests);
    //     return view('user.tests',['aside'=>'tests', 'tests'=>TestResource::collection($tests)]);       
    // }

    
    public function showMyTestsPage(Request $request)
{
    // Vérifier si l'utilisateur est un administrateur
    if (Auth::user()->isAdmin()) {
        // Si l'utilisateur est un administrateur, obtenir tous les tests
        $tests = Test::all();
    } else {
        // Si l'utilisateur n'est pas un administrateur, obtenir seulement ses propres tests
        $tests = Test::where('user_id', '=', Auth::user()->id)->get();
    }

    // Retourner la vue avec la collection de tests
    return view('user.tests', ['aside' => 'tests', 'tests' => TestResource::collection($tests)]);
}


    public function showTestsPage(Request $request){
       
        $tests = Test::all();

        //return TestResource::collection($tests);
        return view('user.tests',['aside'=>'tests', 'tests'=>TestResource::collection($tests)]);       
    }

    public function index()
    {
        
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
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
