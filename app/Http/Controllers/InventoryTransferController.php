<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\InventoryTransfer;
use App\Models\InventoryItem;
use App\Models\StoreInventory;
use Illuminate\Support\Facades\Auth;

class InventoryTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::where('status','Active')->get();
        return view('inventory-transfer.index',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function InventoryTransferItems(Request $request)
    {
        $transferData = $request->all();
        $fromStoreId = $transferData['from_store_id'];
        $toStoreId = $transferData['to_store_id'];
        $items = $transferData['items'];

        $inventory = InventoryTransfer::create([
            'from_id'    => $fromStoreId,
            'to_id'      => $toStoreId,
            'send_by_id' => Auth::id()
        ]);

        foreach($items as $value)
        {
            InventoryItem::create([
                'inventroy_transfer_id' => $inventory->id,
                'product_id'            => $value['product_id'],
                'product_quantity_id'   => $value['product_quantity_id'],
                'product_color_id'      => $value['color_id'],
                'product_size_id'       => $value['size_id'],
                'brand_id'              => $value['brand_id'],
                'quantity'              => $value['quantity'],
            ]);

            StoreInventory::create([
                'store_id'              => $toStoreId,
                'product_id'            => $value['product_id'],
                'product_quantity_id'   => $value['product_quantity_id'],
                'product_color_id'      => $value['color_id'],
                'product_size_id'       => $value['size_id'],
                'brand_id'              => $value['brand_id'],
                'quantity'              => $value['quantity'],
                'total_quantity'        => $value['total_quantity'] + $value['quantity']
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Items transferred successfully.'
        ]);
    }
}