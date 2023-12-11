<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function showQuestions(Request $request){
        $questions = Question::all();
        return view('questions.questions', ['questions' => $questions, 'aside' => 'questions']);
    }

    public function addQuestion(Request $request){

        $description = $request['description'];
        $subcategory_id = $request['subcategory_id'];

        $question =  new Question();
        $question->description = $description;
        $question->subcategory_id = $subcategory_id;

        $question->save();

        return redirect()->route('questions');
    }

    public function editQuestion(Request $request){
        $description = $request['description'];
        $subcategory_id = $request['subcategory_id'];

        $question = Question::find($request['id'])->first();
        $question->description = $description;
        $question->subcategory_id = $subcategory_id;

        $question->update();

        return redirect()->route('questions');
    }

    public function deleteQuestion(Request $request){
        $question = Question::find($request['id'])->first();
        $question->delete();
        return redirect()->back();
    }

    public function showAddQuestionPage(Request $request){
        $subcategories = Subcategory::all();
        return view('questions.add-question',['subcategories' => $subcategories, 'aside' => 'questions']);
    }

    public function showEditQuestionPage(Request $request){
        $subcategories = Subcategory::all();
        $question = Question::find($request['id'])->first();
        return view('questions.edit-question',
        [
            'subcategories' => $subcategories,
            'question'=>$question, 
            'aside' => 'questions'
        ]);
    }
}
