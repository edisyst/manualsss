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
        $manuals = Manual::orderBy('tree_id')
            ->orderBy('parent_id')
            ->get(); // forse non serve aggiungere un campo "ordine/position"

        return view('manuals.create', compact('manuals'));
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
            'path'    => 'http://127.0.0.1:8000/manuals/'.$slug, // in futuro sarà così, per ora stò usando l'ID
            'tags'    => $request->tags,
        ]);

        if (!$request->parent_id){
            $manual->makeRoot()->save();
        } else {
            $parent = Manual::find($request->parent_id);
            $manual->appendTo($parent)->save();
        }

        // lo faccio apposta per salvare una seconda volta e "correggere" il path con route(manuals.show)
        return view('manuals.edit', ["manual" => $manual]);
    }


    public function show(Manual $manual)
    {
        $manuals = Manual::where('parent_id', NULL)->get();

        return view('manuals.show', compact('manual', 'manuals'));
    }


    public function edit(Manual $manual)
    {
        $manuals = Manual::orderBy('tree_id')
            ->orderBy('parent_id')
            ->get(); // forse non serve aggiungere un campo "ordine/position"

        return view('manuals.edit', compact('manual', 'manuals'));
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
//        $manual->delete();  // prima eliminavo solo un elemento, ora anche i figli
        $manual->deleteWithChildren();

        return redirect()->route('manuals.index');
    }


    //E' L'UNICO METODO CHE NON RIESCO A GESTIRE CON I TREE - FORSE DEVO CREARE UN METODO append()
    //FORSE DEVO CREARE UN QUALCOSA DI RICORSIVO
    public function duplicate(Manual $manual)
    {
//        echo '<div>' . $manual->title . '</div>';
//
//        if ($manual->children()->get()->count() > 0){
//            foreach($manual->descendants as $child)
////                self::duplicate($child);
//                echo '<div>' . $child->title . '</div>';
//        } else {
//            dd('no figli');
//        }


        $newManual = Manual::create([
            'title'   => $manual->title.'-dup',
            'content' => $manual->content,
            'slug'    => $manual->slug.'-dup',
            'path'    => $manual->path.'-dup',
            'tags'    => $manual->tags,
        ]);

        if (!$manual->parent_id){
            $newManual->makeRoot()->save();
        } else {
            $newManual->insertBefore($manual)->save();

// PER ORA NON SONO IN GRADO DI DUPLICARE TUTTO IL SOTTOALBERO DEL MANUALE SELEZIONATO
/*
            if ($manual->children()->get()->count() > 0){ // >1 perchè ho appena creato il duplicato ??? forse è >0
                foreach ($manual->children as $child)
                    $newChild = $child;

                    $newChild->appendTo($newManual)->save(); // così sposto i figli di $newManual => sbagliato, li devo duplicare
//                    dd($manual->children()->get());
//                    return $this->duplicate($child);
            } else {
                dd('no figli');
            }
*/
        }

        return redirect()->back();
    }


}
