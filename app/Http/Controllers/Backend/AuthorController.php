<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    //
    public function index()
    {
        $authors = DB::table('authors')->get();
        return view('backend.author.index', compact('authors'));
    }

    public function create()
    {
        return view('backend.author.create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->category_id = $request->category_id;
        $author->name = $request->name;
        $author->year_of_birth = $request->year_of_birth;
        $author->year_of_dead = $request->year_of_dead;
        $author->year_of_dead = $request->year_of_dead;
        $author->age = $request->age;
        $author->country = $request->country;
        $author->image = $request->image;
        $author->description = $request->description;
        $author->save();
        $authors = DB::table('authors')->get();
        return view('backend.author.index', compact('authors'))->with('msg_sucess', 'Thêm tác giả thành công!');
    }

    public function showEdit(Request $request)
    {
        $author = DB::table('authors')->find($request->id);
        return view('backend.author.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->year_of_birth = $request->year_of_birth;
        $author->year_of_dead = $request->year_of_dead;
        $author->year_of_dead = $request->year_of_dead;
        $author->age = $request->age;
        $author->country = $request->country;
        $author->image = $request->image;
        $author->description = $request->description;
        $author->save();
        $authors = DB::table('authors')->get();
        return view('backend.author.index', compact('authors'))->with('msg_sucess', 'Cập nhật dữ liệu thành công!');
    }

    public function delete($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        $authors = DB::table('authors')->get();
        return view('backend.author.index', compact('authors'))->with('msg_sucess', 'Xóa thành công!');
    }
}
