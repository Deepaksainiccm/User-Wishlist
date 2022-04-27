<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlists;
use App\Models\Users;
use Auth;

class WishlistCRUDController extends Controller
{
    public function __construct()
{
  $this->middleware('auth');
}

    public function index()
    {
        return view('wishlist.index', [
            'wishlists' => auth()->user()->wishlists()->orderBy('id','desc')->paginate(5)
        ]);
    }

    public function create()
    {
        return view('wishlist.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'wishlist_name' => 'required'
        ]);

        $wishlists = new Wishlists;
        $wishlists->wishlist_name = $request->wishlist_name;
        auth()->user()->wishlists()->save($wishlists);
        
        return redirect()->route('wishlist.index')
                        ->with('success','wishlists has been created successfully.');
    }

    public function show($id)
    {
        $wishlist = Wishlists::find($id);
        return view('wishlist.show',compact('wishlist'));
    } 

    public function edit($id)
    {
        $wishlists = Wishlists::find($id);
        return view('wishlist.edit',compact('wishlists'));
    } 

    public function update(Request $request, $id)
    {
        $request->validate([
            'wishlist_name' => 'required',
            'user_id' => 'required',
        ]);

       
        
        $wishlists = Wishlists::find($id);
        $wishlists->wishlist_name = request('wishlist_name');
        $wishlists->save();

        return redirect()->route('wishlist.index')
                         ->with('success','wishlists Has Been updated successfully');
    }
    
    public function destroy(Wishlists $wishlist)
    {
        $wishlist->delete();
        return redirect()->route('wishlist.index')
                         ->with('success','wishlist has been deleted successfully');
    }
}
