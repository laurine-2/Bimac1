<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\User;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;

class ShowStatisticsController extends Controller
{
    //
  public function stats(Request $request)
  {
      $users = User::all();
      $questions = Question::all();
      $subcategory = Subcategory::all();
      $tests = Test::all();


   

      $data = [
          'usersNbr' => sizeof($users),
          'questionsNbr' => sizeof($questions),
          'subcategoryNbr' => sizeof($subcategory),
          'testNbr' => sizeof($tests),
          'aside' => 'dashboard'
      ];

      return view('welcome', $data);
  }
  

  
}



