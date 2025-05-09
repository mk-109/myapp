<?php
//A 初期値
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//B______________ルートとコントローラーを繋げて表示するやつ（業務ではこっちが主流）
use App\Http\Controllers\HelloController;

Route::get('/hello', [HelloController::class, 'index']);

//C______________このファイルには色んなルートを記述出来るらしい

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact; 

//  GET /form → フォーム画面を表示
Route::get('/', function () {
    return view('form');
});

//  POST /form でデータを受け取る
Route::post('/form', function(Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    Contact::create($data);


    return redirect('/form')->with('success','登録しました！');
    // dd($request->all());  ダンプ&ダイのddでフォームから受け取ったデータをブラウザ上にダンプ表示してからダイで処理止める（フォームやPOSTの動作確認用）
});