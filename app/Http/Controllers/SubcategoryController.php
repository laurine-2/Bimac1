<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function showSubcategories(Request $request){
        $subcategories = Subcategory::all();
        return view('subcategories.subcategories', ['subcategories' => $subcategories, 'aside' => 'subcategories']);
    }

    public function addSubcategory(Request $request){
        $title = $request['title'];
        $description = $request['description'];

        $subcategory = new Subcategory();

        $subcategory->title = $title;
        $subcategory->description = $description;

        $subcategory->save();


        return redirect()->route('subcategories') ;
    }

    public function editSubcategory(Request $request){


        $title = $request['title'];
        $description = $request['description'];

        $subcategory = Subcategory::where('id','=',$request['id'])->first();

        $subcategory->title = $title;
        $subcategory->description = $description;

        $subcategory->update();

        return redirect()->route('subcategories') ;
    }

    public function deleteSubcategory(Request $request){
        $subcategory = Subcategory::find($request['id'])->first();
        $subcategory->delete();
        return redirect()->back();
    }

    public function showAddSubcategoryPage(Request $request){
        $subcategories = Subcategory::all();
        return view('subcategories.add-subcategory',['subcategories' => $subcategories, 'aside' => 'subcategories']);
    }

    public function showEditSubcategoryPage(Request $request){
        $subcategory = Subcategory::where('id','=',$request['id'])->first();
        return view('subcategories.edit-subcategory',[ 'subcategory' => $subcategory, 'aside' => 'subcategories']);
    }
}
