<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Old_price;
use App\Models\Promotions;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function menu()
    {
        $Category = Category::get();
        $Starters = Menu::where('category_id', 6)->get();
        $Pasta = Menu::where('category_id', 7)->get();
        $Juice = Menu::where('category_id', 8)->get();
        $promotions = Promotions::all(); // Retrieve all promotions from the database
        //dd($Pasta);

        return view('menu')->with(['Category' => $Category, 'Starters' => $Starters, 'Pasta' => $Pasta, 'Juice' => $Juice, 'promotions' => $promotions]);
    }
    public function index()
    {

        $Category = Category::get();
        $Menu = Menu::get();
        //dd($Menu);
        return view('AdminDashboard.menu_create')->with(['Category' => $Category, 'Menu' => $Menu,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'name' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:255',
            'category_id' => 'nullable',
            'price' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable'
        ]);

        // insert record
        $menu = Menu::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);

        // upload menu image
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '-menu' . '.' . $extention;
            $file->move('uploads/menus/', $filename);
            $menu->image = $filename;

            $menu->save();
        }

        return redirect('menu_create')->with('flash_message', 'Menu Added!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function menuedit(Menu $menu, $id)
    {
        $Category = Category::get();
        $menu = Menu::where('id', $id)->firstOrfail();
        return view('menu_edit', compact('menu', 'Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function menu_update(Request $request, Menu $menu)
    {

        // validate
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:255',
            'category_id' => 'nullable',
            'price' => 'nullable',
            'old_price' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable'
        ]);

        // find record
        $menu = Menu::find($request->input('id'));

        // update record info
        $menu->name = $request->input('name');
        $menu->code = $request->input('code');
        $menu->category_id = $request->input('category_id');
        $menu->price = $request->input('price');
        $menu->old_price = $request->input('old_price');
        $menu->description = $request->input('description');

        //update old_price
        $oldPriceHistory = new Old_price();
        $oldPriceHistory->menu_id = $menu->id;
        $oldPriceHistory->old_price = $menu->old_price;
        $oldPriceHistory->save();


        // save updated model into the database
        $menu->save();

        // upload menu image
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '-menu' . '.' . $extention;
            $file->move('uploads/menus/', $filename);
            $menu->image = $filename;

            $menu->save();
        }



        return back()->with('success', 'Successfully Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        Menu::find($request->input('id'))->delete();
        return back()->with('success', 'Successfully deleted Item !');
    }
}
