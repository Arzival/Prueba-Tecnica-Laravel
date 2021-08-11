<?php

namespace App\Observers;

use App\Models\Product;
use App\Models\Invoice;

class ProductObserver
{
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        try {
            $totalDB = Product::rigthjoin('invoices',$product->invoices_id,'invoices.id')->get('invoices.total');
            $total = $totalDB->invoices.total + 1;
        } catch (\Throwable $th) {
            $totalDB = 0;
            $total +- 1;
        }

        Invoice::where('id',$product->invoice_id)->updated([
            'total' => $total,
        ]);
        
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
