<?php

    namespace Database\Seeders;

    use App\Models\Category;
    use Illuminate\Database\Seeder;

    class CategorySeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // Create default categories
            Category::factory()->create([
                'name' => 'Sexy Lingerie',
                'status' => 'active',
                'parent_id' => 0,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

                Category::factory()->create([
                    'name' => 'Bras / Panties',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Garter Sets',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Teddy / Bodysuits',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Babydoll / Chemise',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Camisoles',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Gowns / Robes',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Sleepwear',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Panties / Thongs',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Leather / Faux Leather',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Tutus / Skirts',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Bridal Lingerie',
                    'status' => 'active',
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            Category::factory()->create([
                'name' => 'Corsets / Bustiers',
                'status' => 'active',
                'parent_id' => 0,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

                Category::factory()->create([
                    'name' => 'Lace Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Corset Dresses',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Underbust Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Leather / Faux Leather Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Steel Boned Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Latex Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Bridal Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Zipper Corsets',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Shape Wear',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Waist Trainers',
                    'status' => 'active',
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

        Category::factory()->create([
            'name' => 'Dancewear',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::factory()->create([
            'name' => 'Bra Sets',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Push Up Bras',
                'status' => 'active',
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Demi Bras',
                'status' => 'active',
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bralettes',
                'status' => 'active',
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Unlined Bras',
                'status' => 'active',
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Swimwear',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Bikinis',
                'status' => 'active',
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'One Piece Swimsuits',
                'status' => 'active',
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bandeau Tops',
                'status' => 'active',
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Cover Ups',
                'status' => 'active',
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Clubwear',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Mini Dresses',
                'status' => 'active',
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bodycon Dresses',
                'status' => 'active',
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Jumpsuits / Rompers',
                'status' => 'active',
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Sexy / Long Dresses',
                'status' => 'active',
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Stockings / Gloves',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Pantyhose / Tights',
                'status' => 'active',
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Stockings',
                'status' => 'active',
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Gloves',
                'status' => 'active',
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bodystockings',
                'status' => 'active',
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Costumes',
            'status' => 'active',
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
