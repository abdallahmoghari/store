<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);
        $validatedData['user_id'] = Auth::id();

        
        Category::create($validatedData);
        return redirect()->route('admin.categories.index')->with('success', 'تم إضافة الصنف بنجاح');
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update($validatedData);
        return redirect()->route('admin.categories.index')->with('success', 'تم تحديث الصنف بنجاح');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);


        $category->products()->delete();

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'تم حذف الصنف بنجاح');
    }

}
