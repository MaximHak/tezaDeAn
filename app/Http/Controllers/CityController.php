<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('id', 'DESC')->get();
        return view('backend.city.index', compact('cities'));
    }


    public function cityStatus(Request $request)
    {
        if ($request->mode == 'true') {
            DB::table('cities')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('cities')->where('id', $request->id)->update(['status' => 'inactive']);
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
        return view('backend.city.create');
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
        $status = City::create($data);
        if ($status) {
            return redirect()->route('city.index')->with('success', 'City was created!');
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
        $city = City::find($id);
        if ($city) {
            return view('backend.city.edit', compact('city'));
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
        $city = City::find($id);
        if ($city) {
            $this->validate($request, [
                'title' => 'string|required',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $city->fill($data)->save();
            if ($status) {
                return redirect()->route('city.index')->with('success', 'City was updated!');
            } else {
                return back() - with('error', 'Something went wrong!');
            }
            return view('backend.city.edit', compact('city'));
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
        $city = City::find($id);
        $status = $city->delete();
        if ($city) {
            if ($status) {
                return redirect()->route('city.index')->with('success', 'City successfully deleted!');
            } else {
                return back()->with('error', 'Something went wrong!');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
}
