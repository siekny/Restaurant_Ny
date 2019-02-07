<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use Response;
use App\FoodBlog;
use Illuminate\Support\Facades\Input;

class FoodBlogController extends Controller
{
    
    public function index()
    {
        $foodblogs = FoodBlog::all();
        return view ('backend.foodblog.showblog')->with('foodblogs', $foodblogs);
    }
    public function addview() {
        return view('backend.foodblog.addblog');
    }
    public function view($id) {
        
        $foodblog = FoodBlog::find($id);
        return view('backend.foodblog.detail')->with('foodblog', $foodblog);
    }
    public function store(Request $request)
    {
 
         $rules  =  array(
                'blogName'       => 'required',
                'addBy'         => 'required',
                   ) ;
         $validator = Validator::make ( Input::all(), $rules);
          if ($validator->fails())
          return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
       
            $foodblogs = new FoodBlog;
            $foodblogs->blogName=$request->blogName;
            $foodblogs->addDate=$request->addDate;
            $foodblogs->addBy=$request->addBy;
            $foodblogs->description=$request->description;

            if($request->picture == '') {
                $image = "";
                $foodblogs->image = $image;
            }

            else {
                $image = $request->file('picture');//temporary location = $request->picture
                $filename = time() .'.'.$request->picture->getClientOriginalName();
                $image->move('uploads/picture',$filename);
                $foodblogs->image=$filename;
            }

            $foodblogs->save();
            $foods = FoodBlog::all();
 
            return redirect()->route('adminfoodblog')->with('msg', 'The Message');
       

  
    }

    public function delete ($id) {
        FoodBlog::findorFail($id)->delete();
        return redirect()->route('adminfoodblog')->with('msg', 'The Message');
    }

    public function edit($id)
    {
       $foodblog =  FoodBlog::findorFail($id);
        return view ('backend.foodblog.update')->with('foodblog', $foodblog);
    }

    public function update(Request $request, $id)
    {
        $foodblog=FoodBlog::findOrFail($id);

        $rules  =  array(
                'blogName'       => 'required',
                'addBy'         => 'required',
                   ) ;
         $validator = Validator::make ( Input::all(), $rules);
          if ($validator->fails())
          return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

             $foodimage = '';
             
            if($request->picture == '') {
                $image = "";
                $foodimage = $image;
            }

            else {
                $image = $request->file('picture');//temporary location = $request->picture
                $filename = time() .'.'.$request->picture->getClientOriginalName();
                $image->move('uploads/picture',$filename);
                $foodimage=$filename;
            }

            $foodblog->update([
                'blogName' => $request['blogName'],
                'addDate' => $request['addDate'],
                'addBy' => $request['addBy'],
                'description' => $request['description'],
                'image' => $foodimage
            ]);
            $foodblog->image = $foodimage;
            $foodblog->addDate = $request->addDate;
            $foodblog->save();
            $foodblogs = FoodBlog::all();
            return redirect()->route('adminfoodblog')->with('msg', 'The Message');
       
    }

    public function destroy($id)
    {
        //
    }
}
