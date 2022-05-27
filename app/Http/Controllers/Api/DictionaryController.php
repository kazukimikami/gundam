<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Dictionaries;
use App\Http\Controllers\Controller;

// 記事
class DictionaryController extends Controller
{
    public function index()
    {
      $dictionaries = Dictionaries::select('id', 'title')->get();

      return response()->json($dictionaries);
    }

    public function show($request)
    {
      $dictionary = Dictionaries::find($request, ['id', 'title', 'content', 'image', 'created_at', 'updated_at']);

      return response()->json($dictionary);
    }

    public function create(Request $request)
    {
      $dictionary = Dictionaries::create([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $request->image
      ]);

      return response()->json($dictionary);
    }

    public function update(Request $request)
    {
      $dictionary = Dictionaries::find($request->id);
      $dictionary->update([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $request->image
      ]);
      unset($dictionary['deleted_at']);

      return response()->json($dictionary);
    }

    public function delete(Request $request)
    {
      $dictionary = Dictionaries::find($request->id);
      $dictionary->delete();

      return response()->json($dictionary);
    }
}
