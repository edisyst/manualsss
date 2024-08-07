<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManualController extends Controller
{

    public function index()
    {
        $manuals = Manual::all();
        return view('manuals.index', compact('manuals'));
    }


    public function create()
    {
        return view('manuals.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);

        $slug = Str::slug($request->title, '-');

        $manual = Manual::create([
            'title'   => $request->title,
            'content' => $request->content,
            'slug'    => $slug,
            'path'    => 'http://127.0.0.1:8000/manuals/'.$slug,
            'tags'    => $request->tags,
        ]);

        return view('manuals.edit', ["manual" => $manual]);
    }


    public function show(Manual $manual)
    {
        $manuals = Manual::where('parent_id', NULL)->get();
        return view('manuals.show', compact('manual', 'manuals'));
    }


    public function edit(Manual $manual)
    {
        return view('manuals.edit', compact('manual'));
    }


    public function update(Request $request, Manual $manual)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ]);

        $manual ->update([
            'title'   => $request->title,
            'content' => $request->content,
            'slug'    => Str::slug($request->title, '-'),
            'path'    => route('manuals.show', compact('manual')),
            'tags'    => $request->tags,
        ]);

        return redirect()->back();
    }


    public function destroy(Manual $manual)
    {
        $manual->delete();
        return redirect()->route('manuals.index');
    }


    public function duplicate(Manual $manual)
    {
        Manual::create([
            'title'   => $manual->title.'-dup',
            'content' => $manual->content,
            'slug'    => $manual->slug.'-dup',
            'path'    => $manual->path.'-dup',
            'tags'    => $manual->tags,
        ]);
        return redirect()->back();
    }

    public function reorder()
    {
        $manuals = Manual::defaultOrder()->get()->toTree();
        return view('manuals.reorder', compact('manuals'));
    }

    public function updateOrder(Request $request)
    {
        $movedItemId = $request->input('moved_item');
        $newParentItemId = $request->input('new_parent_item');

        $movedItem = Manual::find($movedItemId);

        if ($newParentItemId) {
            $newParentItem = Manual::find($newParentItemId);
            $movedItem->prependTo($newParentItem)->save();
        } else {
            $movedItem->makeRoot()->save();
        }

        return response()->json(['status' => 'success']);
    }

}
