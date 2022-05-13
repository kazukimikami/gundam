<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Dictionaries;
use App\Http\Controllers\Controller;

class DictionaryController extends Controller
{
    //記事の一覧取得
    public function index()
    {
      $dictionaries = Dictionaries::select('id', 'title')->get();

      return response()->json($dictionaries);
    }

    //記事の詳細取得
    public function show($request)
    {
      $dictionaries = Dictionaries::find($request, ['id', 'title', 'content', 'created_at', 'updated_at']);

      return response()->json($dictionaries);
    }

    //記事を作成
    public function create(Request $request)
    {
      $dictionaries = Dictionaries::create([
        'title' => $request->title,
        'content' => $request->content,
      ]);

      return response()->json($dictionaries);
    }

    //記事を削除
    public function delete(Request $request)
    {
      $dictionaries = Dictionaries::find($request->id);
      $dictionaries->delete();

      return response()->json($dictionaries);
    }

    //記事を更新
    public function update(Request $request)
    {
      $dictionaries = Dictionaries::find($request->id);
      $dictionaries->update([
        'title' => $request->title,
        'content' => $request->content,
      ]);
      unset($dictionaries['deleted_at']);

      return response()->json($dictionaries);
    }
}
