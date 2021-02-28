<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Scalar\String_;

class ChapterController extends Controller
{

    public function index()
    {
        $chapters = Chapter::all();
        return view('chapters.index', compact('chapters'));
    }


    public function create()
    {
        return view('chapters.create');
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'body' => 'required',
        ]);

        $slug = Str::slug($request->title, '-');

        $chapter = Chapter::create([
            'name'   => $request->name,
            'body'   => $request->body,
            'slug'   => $slug,
            'tags'   => $request->tags,
        ]);

        return view('chapters.edit', ["chapter" => $chapter]);
    }


    public function show(Chapter $chapter)
    {
//        return $chapter->body;
        return view('chapters.show', compact('chapter'));
    }


    public function edit(Chapter $chapter)
    {
        return view('chapters.edit', compact('chapter'));
    }



    public function update(Request $request, Chapter $chapter)
    {
        $this->validate($request,[
            'name' => 'required',
            'body' => 'required',
        ]);

        $chapter ->update([
            'name' => $request->name,
            'body' => $request->body,
            'slug' => Str::slug($request->title, '-'),
            'tags' => $request->tags,
        ]);

        return redirect()->back();
    }


    public function destroy(Chapter $chapter)
    {
        $chapter->delete();
        return redirect()->route('chapters.index');
    }


    //LA USO PER INSERIRE VIA AJAX TUTTI I NOMI DEI CAPITOLI NEI PLACEHOLDERS DEL CKEDITOR
    public function getList()
    {
        $chapters = Chapter::all();
        foreach ($chapters as $chapter)
        {
            $list[] = $chapter->name;
        }
        return ($list);
    }


    //LA VOGLIO USARE PER sostituire nome con body NEI PLACEHOLDERS DEL CKEDITOR
    public function fromNameToBody($name)
    {
        $chapter = Chapter::where('name', $name)->first();
        return ''.$chapter->body;
    }
}
