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
        $data['product_image_path'] = config('globals.STORAGE_PATH') . config('globals.PRODUCT_IMAGES_PATH');
        $data['category_image_path'] = config('globals.STORAGE_PATH') . config('globals.CATEGORY_IMAGES_PATH');
        $data['brand_image_path'] = config('globals.STORAGE_PATH') . config('globals.BRAND_IMAGES_PATH');
        $data['products'] = [];

        $limit = $request->has('limit') ? $request->get('limit') : 1;
        $orderByCol = $request->has('order_by_col') ? $request->get('order_by_col') : 'id';
        $orderSort = $request->has('order_sort') ? $request->get('order_sort') : 'ASC';
        $ser_name = $request->has('ser_name') ? $request->get('ser_name') : '';
        
        try {
            $data['products'] = Product::with(['category', 'brand'])->status();

            if ($request->has('product_id'))
                $data['products'] = $data['products']->where('id', $request->get('product_id')); 
            if ($request->has('category_id'))
                $data['products'] = $data['products']->where('category_id', $request->get('category_id'));  
            if ($request->has('brand_id'))
                $data['products'] = $data['products']->where('brand_id', $request->get('brand_id')); 
            if (strlen($ser_name) >= 1)
                $data['products'] = $data['products']->where('name','LIKE',"$ser_name%");  
            
            $data['products'] = $data['products']->orderBy($orderByCol, $orderSort)->paginate($limit);  
        } 
        catch(\Exception $e) {
            return $this->error('Something went wrong!', 500);
        }

        return $this->success(
            $data,
            'Data has been fetched successfully.'
        );
    }
}
