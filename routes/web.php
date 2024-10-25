<?php

use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Models\Faq;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/payment', function(){
    return view('/payment/portal');
});
Route::get('/history', function(){
    return view('history');
});
Route::get('/support', [FaqController::class, 'index'])->name('Faq');
Route::get('/support/{topic}', [FaqController::class, 'loadContent'])->name('loadFaqContent');

Route::get('/search', function (Request $request) {
    $query = $request->query('query');

    $faqs = Faq::where('question', 'LIKE', "%{$query}%")
               ->orWhere('answer', 'LIKE', "%{$query}%")
               ->get();

    return response()->json($faqs);
});

