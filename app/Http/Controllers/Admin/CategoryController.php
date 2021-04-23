<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index')->with('category',$category);
    }

    public function add()
    {
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('cate_image'))
        {
            $file = $request->file('cate_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('cate_name');
        $category->description = $request->input('cate_description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->save();
        return redirect('admin/admin-dashboard')->with('status','Inserted Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with('category',$category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('cate_image'))
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('cate_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('cate_name');
        $category->description = $request->input('cate_description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->update();
        return redirect('admin/admin-dashboard')->with('status','Category Updated Successfully');
    }
}
