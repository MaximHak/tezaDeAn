<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.category.index', compact('categories'));
    }

    public function categoryStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('categories')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('categories')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully updated status', 'status' => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats = Category::where('is_parent', 1)->orderBy('title', 'ASC')->get();
        return view('backend.category.create', compact('parent_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//dd($request->all());
        $this->validate($request, [
            'title' => 'string|required',
            'summary' => 'string|nullable',

            'status' => 'nullable|in:active,inactive',
        ]);

        $data = array_merge($request->all(), ['is_parent' => 0]);

        $slug = Str::slug($request->input('title'));
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug .= time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        $status = Category::create($data);
        if ($status) {
            return redirect()->route('category.index')->with('success', 'Category was created!');
        } else {
            return back() - with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parent_cats = Category::where('is_parent', 1)->orderBy('title', 'ASC')->get();
        if ($category) {
            return view('backend.category.edit', compact('category', 'parent_cats'));
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $category = Category::find($id);
        if ($category) {
            $request->is_parent = 1;
            $this->validate($request, [
                'title' => 'string|required',
                'summary' => 'string|nullable',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = array_merge($request->all(), ['is_parent' => 1]);

            if ($request->is_parent == 1) {
                $data['parent_id'] = null;
            } else {
                $data['is_parent'] = $request->input('is_parent',0);
            }

            $status = $category->fill($data)->save();

            if ($status) {
                return redirect()->route('category.index')->with('success', 'Category was updated!');
            } else {
                return back() - with('error', 'Something went wrong!');
            }
            return view('backend.category.edit', compact('category'));
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $child_cat_id = Category::where('parent_id',$id)->pluck('id');

        if ($category) {
            $status = $category->delete();
            $status = true;
            if ($status) {
                if (count($child_cat_id) > 0){
                    Category::shiftChild($child_cat_id);
                }
                return redirect()->route('category.index')->with('success', 'Category successfully deleted!');
            } else {
                return back()->with('error', 'Something went wrong!');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
    public function getChildByParentID(Request $request, $id){
        $category = Category::find($request->id);
        if ($category) {
            $child_id = Category::getChildByParentID($id);
            if (count($child_id) <= 0) {
                return response()->json(['status' => false, 'data' => null, 'msg' => 'Category child not fount']);
            } else {
                return response()->json(['status' => true, 'data' => $child_id, 'msg' => '']);

            }
        }else{
            return response()->json(['status' => false, 'data' => null, 'msg' => 'Category not fount']);
        }
    }
}
