<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Activity;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','ASC')->paginate(2);
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $categoria = new Category();
        $categoria->name    =   ucwords($request->input('name'));
        $categoria->type    =   $request->input('type');
        $categoria->divisa  =   $request->input('divisa');
        $categoria->save();
        return redirect('/Categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return redirect('/Categorias');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $slugg = explode('-',$slug);
        $name = $slugg[0];
        $type = $slugg[1];

         $category  =   Category::where('name',$name)
                                ->where('type',$type)
                                ->get();
        $category = $category[0];
        return view('categories/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $slugg = explode('-',$slug);
        $name = $slugg[0];
        $type = $slugg[1];

        $category  =   Category::where('name',$name)
                                ->where('type',$type)
                                ->get();
        $category->first()->fill($request->all())->save();

        return redirect('/Categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $slugg = explode('-',$slug);
        $name = $slugg[0];
        $type = $slugg[1];

        $category  =   Category::where('name',$name)
                                ->where('type',$type)
                                ->get();

        $category[0]->delete();
        return redirect('/Categorias');

    }
}
