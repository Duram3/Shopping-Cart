<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://cumafar.helencaltum.com/wp-content/uploads/2016/11/paracetamol.jpg',
            'title' => 'Paracetamol',
            'description' => 'Cure All Disease',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.superama.com.mx/Content/images/products/img_large/0750100116893L.jpg',
            'title' => 'Bisolvon',
            'description' => 'Alivia la tos',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.bachflower.com/wordpress/wp-content/uploads/2012/09/Homebox-2-600x400.jpg',
            'title' => 'Bach Flowers',
            'description' => 'Natural Estress Relief for Kids',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.bertasnams.lv/media/catalog/product/cache/2/image/9df78eab33525d08d6e5fb8d27136e95/m/e/med727_1.jpg',
            'title' => 'Dalmarelin',
            'description' => 'Respira mejor',
            'price' => 17
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.decathlon.es/media/821/8216722/big_cd7834a5147248638584dc0962d9283f.jpg',
            'title' => 'Whey Gold Protein',
            'description' => 'Obtén más músculo',
            'price' => 18
        ]);
        $product->save();
    }
}
