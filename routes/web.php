<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ShowStatisticsController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'redirectToHome'])->name('home');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[AuthController::class,'login'])->name('login');

Route::get('/register',function(){
    return view('register');
})->name('register');

Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::get('questions', [QuestionController::class,'showQuestions'])->name('questions');
Route::get('add-question-page', [QuestionController::class,'showAddQuestionPage'])->name('add-question-page');
Route::get('edit-question-page-{id}', [QuestionController::class,'showEditQuestionPage'])->name('edit-question-page');

Route::post('add-question', [QuestionController::class,'addQuestion'])->name('add-question');
Route::post('edit-question', [QuestionController::class,'editQuestion'])->name('edit-question');
Route::get('delete-question', [QuestionController::class,'deleteQuestion'])->name('delete-question');


Route::get('subcategories', [SubcategoryController::class,'showSubcategories'])->name('subcategories');
Route::get('add-subcategory-page', [SubcategoryController::class,'showAddSubcategoryPage'])->name('add-subcategory-page');
Route::get('edit-subcategory-page-{id}', [SubcategoryController::class,'showEditSubcategoryPage'])->name('edit-subcategory-page');

Route::post('add-subcategory', [SubcategoryController::class,'addSubcategory'])->name('add-subcategory');
Route::post('edit-subcategory', [SubcategoryController::class,'editSubcategory'])->name('edit-subcategory');
Route::get('delete-subcategory', [SubcategoryController::class,'deleteSubcategory'])->name('delete-subcategory');


Route::get('answers', function(){})->name('answers');

Route::get('/quiz', [QuizController::class, 'showQuizPage'])->name('quiz');
Route::get('/choose-subcategory', [QuizController::class, 'showSubcategoriesPage'])->name('choose-subcategory');
Route::get('/my-answers-{test_id}', [QuizController::class, 'showMyAnswersPage'])->name('my-answers');

Route::get('/tests', [TestController::class, 'showMyTestsPage'])->name('tests');

Route::post('/submit-quiz', [QuizController::class, 'submitQuiz'])->name('submit-quiz');

Route::get('/dashboard', [ShowStatisticsController::class, 'stats'])->name('dashboard');