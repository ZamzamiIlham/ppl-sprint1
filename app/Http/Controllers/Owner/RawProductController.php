<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\RawProduct;
use App\Models\RawProductOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RawProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.owner.raw_product.index")->with([
            "raw_products" => RawProductOwner::with("RawProduct")->whereUserId(Auth::user()->id)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.owner.raw_product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "image"
        ]);

        // create or check if data raw product is existed so it cant be redundant
        $raw_product = RawProduct::firstOrCreate([
            "name" => $request->name
        ]);

        // create owner
        $raw_product_owner = RawProductOwner::create([
            "raw_product_id" => $raw_product->id,
            "user_id" => Auth::user()->id,
            "description" => $request->description,
            "image" => $request->image
        ]);
        return redirect()->route("owner.raw-product.index")->with("success", "Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(RawProduct $rawProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawProductOwner $rawProductOwner)
    {
        return view("pages.owner.raw_product.edit")->with([
            "raw_product_owner" => $rawProductOwner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RawProductOwner $rawProductOwner)
    {
        $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "image"
        ]);

        // update raw product name
        $raw_product = RawProduct::find($rawProductOwner->raw_product_id);
        $raw_product->update([
            "name" => $request->name
        ]);

        $rawProductOwner->update([
            "description" => $request->description,
            "image" => $request->image
        ]);

        return redirect()->route("owner.raw-product.index")->with("success", "Data berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawProductOwner $rawProductOwner)
    {
        RawProductOwner::find($rawProductOwner->id)->delete();
        RawProduct::find($rawProductOwner->raw_product_id)->delete();
        return redirect()->route("owner.raw-product.index")->with("success", "Data berhasil dihapus");
    }
}
