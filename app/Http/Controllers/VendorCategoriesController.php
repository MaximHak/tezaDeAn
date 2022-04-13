<?php

namespace App\Http\Controllers;

use App\Models\VendorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VendorCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendorcategories = VendorCategory::orderBy('id', 'DESC')->get();
        return view('backend.vendorcategories.index', compact('vendorcategories'));
    }

    public function vendorcategoriesStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('vendorcategories')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('vendorcategories')->where('id', $request->id)->update(['status' => 'inactive']);
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
        return view('backend.vendorcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $slug_count = VendorCategory::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug .= time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        $status = VendorCategory::create($data);
        if ($status) {
            return redirect()->route('vendorcategories.index')->with('success', 'Vendor category was created!');
        } else {
            return back() - with('error', 'Something went wrong!');
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
        $vendor_category = VendorCategory::find($id);
        if ($vendor_category) {
            return view('backend.vendorcategories.edit', compact('vendor_category'));
        } else {
            return back()->with('error', 'Data not found');
        }
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
        $vendor_category = VendorCategory::find($id);
        if ($vendor_category) {
            $this->validate($request, [
                'title' => 'string|required',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $vendor_category->fill($data)->save();
            if ($status) {
                return redirect()->route('vendorcategories.index')->with('success', 'Vendor category was updated!');
            } else {
                return back() - with('error', 'Something went wrong!');
            }
            return view('backend.vendorcategories.edit', compact('vendor_category'));
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor_category = VendorCategory::find($id);
        $status = $vendor_category->delete();
        if ($vendor_category) {
            if ($status) {
                return redirect()->route('vendorcategories.index')->with('success', 'Vendor category successfully deleted!');
            } else {
                return back()->with('error', 'Something went wrong!');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
}
