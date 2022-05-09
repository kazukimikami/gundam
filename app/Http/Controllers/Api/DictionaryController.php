<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Dictionaries;
use App\Http\Controllers\Controller;

class DictionaryController extends Controller
{
    //レコード全件取得
    public function index()
    {
      $dictionaries = Dictionaries::get();

      return response()->json([
        "dictionaries" => $dictionaries
      ], 200);
    }

    //レコード1件だけ取得
    public function show($request)
    {
      $dictionaries = Dictionaries::find($request);

      return response()->json($dictionaries);
    }

    //新しくレコード作成
    public function create(Request $request)
    {
      $dictionaries = Dictionaries::create([
        'title' => $request->title,
        'content' => $request->content,
      ]);

      return response()->json($dictionaries);
    }

    //既存レコードの削除
    public function delete(Request $request)
    {
      $dictionaries = Dictionaries::find($request->id);
      $dictionaries->delete();

      return response()->json();
    }

    //既存レコードの更新
    public function update(Request $request)
    {
      $dictionaries = Dictionaries::find($request->id);
      $dictionaries->update([
        'title' => $request->title,
        'content' => $request->content,
      ]);

      return response()->json($dictionaries);
    }
}
