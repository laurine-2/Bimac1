<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnswerResource;
use App\Http\Resources\TestResource;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Subcategory;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function showQuizPage(Request $request){
        $subcategory_id = $request['subcategory_id'];
        $subcategory = Subcategory::where('id','=',$subcategory_id)->first();
        $questions = Question::where('subcategory_id','=',$subcategory_id)->get();
        return view('user.quiz',['aside'=>'quiz','subcategory'=> $subcategory,'questions'=>$questions]);
    }

    public function showSubcategoriesPage(Request $request){
        $subcategories = Subcategory::all();
        return view('user.subcategories',['aside'=>'quiz','subcategories'=> $subcategories]);
       
    }

    public function submitQuiz(Request $request){

       DB::transaction(function () use ($request) { 

            $subcategory_id = $request['subcategory_id'];

            $test = new Test();
            $test->subcategory_id = $subcategory_id;
            $test->user_id = Auth::user()->id;
            $test->save();

            foreach($request->all() as $key=>$answers){
                
                if($key != '_token' && $key != 'subcategory_id'){
                    
                    $question_id = explode('_', $key)[1];
                    $question = Question::find($question_id)->first();

                    $data = [];

                    foreach($answers as $answer) {
                        $reponse_number = explode('_',$answer)[1];
                       
                        if($reponse_number == '1'){
                            $data['reponse_1'] = $question->reponse_1;
                        }
                        else if($reponse_number == '2'){
                            $data['reponse_2'] = $question->reponse_2;
                        }
                        else if($reponse_number == '3'){
                            $data['reponse_3'] = $question->reponse_3;
                        }
                        else if($reponse_number == '4'){
                            $data['reponse_4'] = $question->reponse_4;
                        }
                    }

                    $data ['question_id'] = $question_id;
                    $data ['test_id'] = $test->id;


                   Answer::create($data);
                }
        }});


       return redirect()->route('tests');
         
    }

    public function showMyAnswersPage(Request $request){
        $test = Test::find($request['test_id'])->first();
        $answers = Answer::where('test_id','=', $request['test_id'])->get();

        return view('user.answers',[
            'aside'=>'tests',
            'answers'=>AnswerResource::collection($answers),
            'test'=>new TestResource($test)
        ]);
    }

}
