<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\Product;

class ProductController extends Controller
{
    use ApiResponser;
    
    /*
     * Get products
     * ------------------------------------------------------------
     * 
     * Request Parameters:
     *  - No parameter required!
     * 
     * Response:
     *  - Unauthenticate:
     *    - code:       500
     *    - status:     Error
     *    - message:    You are not authorized to access!
     *    - data:       null
     *  - Exception:
     *    - code:       500
     *    - status:     Error
     *    - message:    Something went wrong!
     *    - data:       null
     *  - Authenticate:
     *    - status:         Success
     *    - message:        Data has been fetched successfully.
     *    - data:           JSON format (Object {...})
     *      - id:           Country id
     *      - code:         Country name
     *      - name:         Coutnry name
     *      - phonecode:    Country phone code
     */
    public function getProducts(Request $request) {
        $data = [];
        $data['default_path'] = config('globals.DEFAULT_IMAGE_PATH');
        $data['image_path'] = config('globals.STORAGE_PATH') . config('globals.PRODUCT_IMAGES_PATH');
        $data['products'] = [];
        // try {
            if ($request->has('product_id'))
                $data['products'] = Product::where('id', $request->get('product_id'))->get();  
            else
                $data['products'] = Product::all();  
        // } 
        // catch(\Exception $e) {
        //     return $this->error('Something went wrong!', 500);
        // }

        return $this->success(
            $data,
            'Data has been fetched successfully.'
        );
    }
}
