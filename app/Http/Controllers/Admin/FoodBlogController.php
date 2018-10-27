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
        

        $validator = Validator::make($request->all(), [
        'blogName' => 'required',
        'addDate' => 'required',
        'addBy' => 'required',
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

        if (!empty($request->picture)) {
            $filename = time() . '.' . $request->picture->getClientOriginalName();
            $foodblog->picture = $filename;
        }
        $foodblog->blogName =  $request->blogName;
        $foodblog->addDate = $request->addDate;
        $foodblog->addBy ="kiki";
        $foodblog->description = $request->description;
    
      
        $foodblog->save();

      
        if (!empty($request->picture)) {
            $fileName = $image->getClientOriginalName();
            $image->move('uploads/picture', $fileName);
            $foodblog->picture = $fileName;
        }
        return response()->json($foodblog);

  
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
