<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'name' => 'Stunning Blue Iris',
          'description' => 'With striking uniqueness and beauty, irises have rich meanings, and when given as gifts, they can convey deep sentiments.The buouquet includes blue Irises, freshness, and a personalized card message.',
          'imagePath' => 'http://www.onlineblog.ro/wp-content/uploads/2017/04/buchet-de-iris.jpg',
          'price' => 40
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Elegant Blooms of Sunshine',
          'description' => 'Send this beautiful basket arrangement of 40 mix colour flowers including 16 pink carnations, 6 white carnations, 12 pink roses and 6 white roses with green filler their way from Ferns N Petals and make them smile.',
          'imagePath' => 'https://i7.fnp.com//images/pr/l/elegant-blooms-of-sunshine_1.jpg',
          'price' => 81
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Descent Bouquet',
          'description' => 'Special ones should be treated with special gift. Send this glorious bouquet of orange asiatic lilies to someone you like the most and get appreciation in return. Your gift contains a bouquet of 8 orange asiatic lilies.',
          'imagePath' => 'https://i9.fnp.com/images/pr/l/descent-bouquet_1.jpg',
          'price' => 35
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Bright Yellow Lilies',
          'description' => 'The bouquet consists of 8 yellow Asiatic Lilies, yellow packing, and a paper golden ribbon.',
          'imagePath' => 'https://i9.fnp.com//images/pr/l/bright-yellow-asiatic-lilies_1.jpg',
          'price' => 33
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Roses and Orchids Vase Arrangement',
          'description' => 'This item consists of 12 pink roses, 12 blue orchids, 1 cylindrical glass vase 4 x 6 inches, and green fillers.',
          'imagePath' => 'https://i8.fnp.com//images/pr/l/roses-and-orchids-vase-arrangement_1.jpg',
          'price' => 50
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => '365 Red Roses Basket',
          'description' => 'This basket is the absolute classic expression of love, perfect to win the heart of your special someone. It makes a memorable romantic gift.',
          'imagePath' => 'https://i7.fnp.com//images/pr/l/365-red-roses-basket_1.jpg',
          'price' => 350
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Royal Floral Arrangement',
          'description' => 'This arrangement consists of 6 purple orchids, 3 white asiatic lilies, 6 white carnations, dracaena leaves, and 1 cylindrical glass vase of height 12 inches. The vase comes with fillers.',
          'imagePath' => 'https://i9.fnp.com//images/pr/l/royal-floral-vase-arrangement_1.jpg',
          'price' => 49
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Special Delight',
          'description' => 'Send these blush pink and white blooms to your beloved and add sweet moments to your romance. This lovely bouquet will surely get a bright smile on her face. Your gift contains: 1 rectangular glass vase, 30 pink roses, and 25 white daisies.',
          'imagePath' => 'https://i9.fnp.com/images/pr/l/special-delight_1.jpg',
          'price' => 60
        ]);
        $product->save();

        $product = new \App\Product([
          'name' => 'Adorable and Charming Peacock',
          'description' => 'The love that two of you share is special and so is this magnificent arrangement. Orchids, oriental lily and carnation combined in purple peacock arrangement expresses the essence of romantic feelings. Let the right sentiment be expressed straight from your heart with this extravagant arrangement.',
          'imagePath' => 'https://i9.fnp.com/images/pr/l/adorable-and-charming-peacock_1.jpg',
          'price' => 81
        ]);
        $product->save();


        $product = new \App\Product([
          'name' => 'Conveying Love',
          'description' => 'A delightful and colorful bouquet of yellow asiatic lilies would be a wonderful gift to convey your love to your dear ones. Get it today to remind your special ones about your true feelings. Your gift contains a bouquet of 11 yellow asiatic lilies.',
          'imagePath' => 'https://i8.fnp.com//images/pr/l/conveying-love_1.jpg',
          'price' => 40
        ]);
        $product->save();
}
}
