<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 50; $i++) {

            $products = new Product();
            $products->idSP = 'SP'.$i;
            $products->name_product = 'San Pham '.$i;
            $products->quantity = '01';
            if($i % 3 == 0){
                $products->categories = 'accessories';
            } elseif ($i % 2 == 0) {
                $products->categories = 'clothes';
            } else {
                $products->categories = 'shoes';
            }
            // Chay cau lenh php artisan storage:link de tao storage luu tru file.
            $products->image = ('/uploads/image/0sEFllZPXGiManenhgJ9qOmj6sg6CQtLsZsa3l33.jpg');
            $products->price = '100000';
            $products->save();
             
        }
    }
}
