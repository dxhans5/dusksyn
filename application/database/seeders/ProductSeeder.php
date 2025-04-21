<?php

    namespace Database\Seeders;

    use App\Models\Product;
    use Illuminate\Database\Seeder;

    class ProductSeeder extends Seeder
    {
        private $temp_price = 0.00; // Temporary variable to store the price

        /**
         * The price of the product.
         *
         * @var float
         */
        private function getPrice(): float
        {
            $this->temp_price = rand(100, 10000) / 100;
            return $this->temp_price; // Random price between 1.00 and 100.00
        }

        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // Create default products
            Product::factory()->create([
                'name' => 'Seductive Purple Lingerie Set with Sheer Overlay',
                'sku' => '8649300175-'.env('STORE_ID', 'UNK').'-'.Product::count()+1,
                'description' => 'Add a touch of style to your lingerie wardrobe with this stunning purple set. The bra is designed with a soft cups, satin bow accents, adjustable spaghetti straps, a hook and eye back closure, offering both comfort and allure. The high-waisted panties feature sparkling details and side bow, enhancing the overall appeal. The sheer skirt provide a seamless finish, ideal for both special evenings and everyday wear.',
                'vendor_price' => $this->getPrice(),
                'selling_price' => $this->temp_price + ($this->temp_price * 0.25), // 25% markup
                'in_stock' => rand(0, 100),
                'category_id' => 1,
                'brand_id' => null,
                'vendor_id' => null,
                'image_collection_id' => null,
                'status' => rand(1, 3), // Random status between 1 and 3
                'added_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Product::factory()->create([
                'name' => 'Elegant Pink Lace Bustier with Tulle Skirt',
                'sku' => '7462503981-'.env('STORE_ID', 'UNK').'-'.Product::count()+1,
                'description' => 'Elevate your lingerie collection with this elegant pink lace bustier set. The structured design ensures a flattering fit that enhances your curves, while the lace-up front allows for customization. The sheer tulle skirt with heart patterns adds a playful and romantic charm, ideal for both special evenings and everyday wear.',
                'vendor_price' => $this->getPrice(),
                'selling_price' => $this->temp_price + ($this->temp_price * 0.25), // 25% markup
                'in_stock' => rand(0, 100),
                'category_id' => 1,
                'brand_id' => null,
                'vendor_id' => null,
                'image_collection_id' => null,
                'status' => rand(1, 3), // Random status between 1 and 3
                'added_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
