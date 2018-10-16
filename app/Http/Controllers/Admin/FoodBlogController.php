<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\FoodBlog;

class FoodBlogController extends Controller
{
    
    public function index()
    {
        $foodblogs = FoodBlog::all();
        return view ('backend.foodblog')->with('foodblogs', $foodblogs);
    }

    public function store(Request $request)
    {
        $foodblog = new FoodBlog;
        $foodblog->blogName = $request->blogName;
        $foodblog->addDate = $request->addDate;
        $foodblog->addBy = $request->addBy;
        $foodblog->description = $request->description;
        $foodblog->picture = $request->file('picture')->getClientOriginalName();
        var_dump($foodblog->picture);

        // $image = $request->file('picture');
        // $new_name = $request->picture->getClientOriginalName();
        // $image->move(public_path('uploads/picture'), $new_name);
        // $foodblog->picture = $new_name;
        $foodblog->save();
        return response()->json($foodblog);

        // $validation = Validator::make($request->all(), [
        //     'picture' => 'required|image|mines:jpeg,png,jpg,gif|max:2048'
        // ]);
        // if ($validation->passes()) {
            

        // }

        
    }
    public function delete (Request $request) {
        $id = $request->id;
        $foodblogs = FoodBlog::find($id);
        $foodblogs = FoodBlog::destroy($id);
        return response()->json($foodblogs);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
