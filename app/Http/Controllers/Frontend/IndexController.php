<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Banner;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;


class IndexController extends Controller
{
    /**
     * A function that is used to display the home page of the website.
     */
    public function home()
    {
        $user = Auth::user();
        $categories = Category::where(['status' => 'active', 'is_parent' => 1])->limit(3)->orderBy('id', 'DESC')->get();
        $vendors = User::where(['status' => 'active', 'role' => 'seller'])->limit(5)->orderBy('id', 'DESC')->get();

        $popular_products = Product::where(['status' => 'active', 'condition' => 'popular'])->inRandomOrder()->limit(8)->get();
        $new_products = Product::where(['status' => 'active', 'condition' => 'new'])->inRandomOrder()->limit(8)->get();

        return view('frontend.index', compact(['popular_products', 'new_products', 'categories', 'vendors', 'user']));
    }

    /**
     * A function that is used to filter products based on the category, vendor, condition and order by.
     *
     * @param Request request catId, order_by, vendor, condition, show_amount
     */
    public function productList(Request $request)
    {
        //
        if ($request->catId != 'all' && $request->order_by == 1 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'vendor_id' => $request->vendor, 'condition' => $request->condition])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 2 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'vendor_id' => $request->vendor, 'condition' => $request->condition])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 3 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'vendor_id' => $request->vendor, 'condition' => $request->condition])->orderBy('date', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId == 'all' && $request->order_by == 1 && $request->vendor == 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active'])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 2 && $request->vendor == 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active'])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 3 && $request->vendor == 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active'])->orderBy('created_at', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId == 'all' && $request->order_by == 1 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'condition' => $request->condition])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 2 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'condition' => $request->condition])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 3 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'condition' => $request->condition])->orderBy('created_at', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId != 'all' && $request->order_by == 1 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'condition' => $request->condition])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 2 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'condition' => $request->condition])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 3 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId, 'condition' => $request->condition])->orderBy('created_at', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId != 'all' && $request->order_by == 1 && $request->vendor == 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 2 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId != 'all' && $request->order_by == 3 && $request->vendor == 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'cat_id' => $request->catId])->orderBy('created_at', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId == 'all' && $request->order_by == 1 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor , 'condition' => $request->condition])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 2 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor , 'condition' => $request->condition])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 3 && $request->vendor != 'all' && $request->condition != 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor, 'condition' => $request->condition])->orderBy('created_at', 'asc')->paginate($request->show_amount);

        //
        elseif ($request->catId == 'all' && $request->order_by == 1 && $request->vendor != 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor])->orderBy('title', 'asc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 2 && $request->vendor != 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor])->orderBy('title', 'desc')->paginate($request->show_amount);
        elseif ($request->catId == 'all' && $request->order_by == 3 && $request->vendor != 'all' && $request->condition == 'all')
            $products = Product::where(['status' => 'active', 'vendor_id' => $request->vendor])->orderBy('created_at', 'asc')->paginate($request->show_amount);
        if ($products) {
            $html = view('frontend.layouts.products', compact('products'))->render();

            return response()->json([
                'status' => true,
                'html' => $html,
            ]);
        } else {
            $html = view('frontend.layouts.products', compact('products'))->render();
            return response()->json([
                'status' => false,
                'html' => $html,
            ]);
        }
    }

    /**
     * It returns the view of the shop page with the products and categories.
     */
    public function productCategory()
    {
        $vendors = User::where(['status' => 'active', 'role' => 'seller'])->get();
        $products = Product::where(['status' => 'active'])->paginate(12);
        $related_products = Product::where(['status' => 'active'])->inRandomOrder()->limit(4)->get();
        $categories = Category::with('children')->whereNull('parent_id')->orderBy('id', 'desc')->get();
        return view('frontend.shop', compact(['products', 'categories', 'related_products', 'vendors']));
    }

    /**
     * It gets a product by its ID and returns a view with the product and 4 other products
     *
     * @param id The id of the product you want to get.
     *
     * @return A view with the product and products variables.
     */
    public function getProductByID($id)
    {
        $product = Product::where('id', $id)->get()->first();
        $products = Product::where(['status' => 'active'])->inRandomOrder()->limit(4)->get();
        return view('frontend.product', compact('product', 'products'));
    }

    /**
     * It returns the view `frontend.checkout`
     *
     * @return A view called checkout.blade.php
     */
    public function checkout()
    {
        $cities = City::all();
        return view('frontend.checkout', compact('cities'));
    }

    public function orderConfirmation(Request $request)
    {

        $order = Order::create($request->all());

        $products = $request->input('products', []);

        $quantities = $request->input('quantity', []);

        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
            }
        }
        session()->forget('cart');
        $orders = Order::where('id', $order->id)->with('products')->get();

        \Mail::to($order->customer_email)->send(new \App\Mail\NotifyMail($orders));

        return view('frontend.confirmation', compact('orders'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->back()->with(['success' => 'Mesajul a fot trimis!']);
    }
}
