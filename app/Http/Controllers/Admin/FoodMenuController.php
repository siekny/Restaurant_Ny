<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\FoodMenu;
use App\FoodBlog;

class FoodMenuController extends Controller
{
    
    public function index()
    {
        $foodmenus = FoodMenu::all();
        
        return view ('backend.foodmenu.showmenu')->with('foodmenus', $foodmenus);
    }

    
    public function addview()
    {
        $foodblogids = FoodBlog::all();
        return view('backend.foodmenu.addmenu')->with('foodblogids', $foodblogids);
    }

    
    public function store(Request $request)
    {
        $foodmenu = new FoodMenu;
        $foodmenu->foodName = $request->foodName;
        $foodmenu->price = $request->price;
        $foodmenu->description = $request->description;
        $foodmenu->blog_id = $request->blog_id;

        if($request->image == '') {
            $image_food = "";
            $foodmenu->image = $image_food;
        }

        else {
            $image_food = $request->file('image');//temporary location = $request->picture
            $filename = time() .'.'.$request->image->getClientOriginalName();
            $image_food->move('uploads/picture',$filename);
            $foodmenu->image=$filename;
        }
        $foodmenu->save();
        $foodmenus = FoodMenu::all();
        return redirect()->route('foodmenuAdd')->with('foodmenus', $foodmenus);
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $foodmenu = FoodMenu::findOrFail($id);
        return view('backend.foodmenu.updatemenu')->with('foodmenu', $foodmenu);
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
