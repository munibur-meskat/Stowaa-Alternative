<?php

namespace App\Http\Controllers\Backend\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::select(['id','name','title','description','image'])->paginate(5);
        
        // $categories = Category::get(['id','name','title','description','image']);
        return view('backend-app.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend-app.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $category_image = $request->file('image');
        $image_name = '';        
        if($category_image){
            $image_name = $request->name . time() . '.' .$category_image->getClientOriginalExtension();
            $upload_image = $category_image->move(public_path('storage/category/'),$image_name);
        }
        $valided = $request->validate([
            'name'=>'required|unique:categories',
            'title'=>'max:20',
            'description'=>'max:250',
             
        ],
        [
            'name.required' => 'Please enter a category name',
            'name.unique' => 'Category name must be uniqre',
            'title' => 'Title max size 20 character',
           
        ]);

        if($valided == true){
            $categories = new Category();
            $categories->name = $request->name;
            $categories->user_id = auth()->user()->id;
            $categories->slug = Str::slug($request->name);
            $categories->title = $request->title;
            $categories->description = $request->description;
            $categories->image = $image_name;
            $categories->save();

            return redirect()->route('dashboard.category.index')->with('success','Category Insert successfully');
        }     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = Category::where('id',$id)->get(['id','name','title','description','image']);
        return view('backend-app.category.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $category_image = $request->file('image');
       
        $categories = Category::find($id);
        $image_name = $categories->image;
        if(!empty($category_image) && !empty($image_name)){
            $file_path = public_path('storage/category/'.$image_name);
            if(file_exists($file_path)){
                unlink($file_path);
            }
        }
      
        if($category_image == true){
            $image_name = $request->name . time() . "." . $category_image->getClientOriginalExtension();
            
            $upload_image = $category_image->move(public_path('storage/category'),$image_name);
        }
        
        $categories->update(
             [
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_name,
             ]
        );
        return redirect()->route('dashboard.category.index')->with('success','Category update successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // return $id;
        // exit();
        $categories = Category::find($id);
    
        if(!empty($categories->image)){
            $category_image = $categories->image;
            $file_path = public_path('storage/category/' .$category_image);
            if(file_exists($file_path)){
                unlink($file_path);
            }
        }
        
        $categories->delete();
        return redirect()->route('dashboard.category.index')->with('success','Category Delete successfull');
    }
}
