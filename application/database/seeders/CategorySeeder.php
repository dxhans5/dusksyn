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
                'status' => 1,
                'parent_id' => 0,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

                Category::factory()->create([
                    'name' => 'Bras / Panties',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Garter Sets',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Teddy / Bodysuits',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Babydoll / Chemise',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Camisoles',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Gowns / Robes',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Sleepwear',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Panties / Thongs',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Leather / Faux Leather',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Tutus / Skirts',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Bridal Lingerie',
                    'status' => 1,
                    'parent_id' => 1,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            Category::factory()->create([
                'name' => 'Corsets / Bustiers',
                'status' => 1,
                'parent_id' => 0,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

                Category::factory()->create([
                    'name' => 'Lace Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Corset Dresses',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Underbust Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Leather / Faux Leather Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Steel Boned Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Latex Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Bridal Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Zipper Corsets',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Shape Wear',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                Category::factory()->create([
                    'name' => 'Waist Trainers',
                    'status' => 1,
                    'parent_id' => 2,
                    'added_by' => 1,
                    'updated_by' => 1,
                    'store_id' => env('STORE_ID', 'UNK'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

        Category::factory()->create([
            'name' => 'Dancewear',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::factory()->create([
            'name' => 'Bra Sets',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Push Up Bras',
                'status' => 1,
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Demi Bras',
                'status' => 1,
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bralettes',
                'status' => 1,
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Unlined Bras',
                'status' => 1,
                'parent_id' => 4,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Swimwear',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Bikinis',
                'status' => 1,
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'One Piece Swimsuits',
                'status' => 1,
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bandeau Tops',
                'status' => 1,
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Cover Ups',
                'status' => 1,
                'parent_id' => 5,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Clubwear',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Mini Dresses',
                'status' => 1,
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bodycon Dresses',
                'status' => 1,
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Jumpsuits / Rompers',
                'status' => 1,
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Sexy / Long Dresses',
                'status' => 1,
                'parent_id' => 6,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Stockings / Gloves',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            Category::factory()->create([
                'name' => 'Pantyhose / Tights',
                'status' => 1,
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Stockings',
                'status' => 1,
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Gloves',
                'status' => 1,
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Category::factory()->create([
                'name' => 'Bodystockings',
                'status' => 1,
                'parent_id' => 7,
                'added_by' => 1,
                'updated_by' => 1,
                'store_id' => env('STORE_ID', 'UNK'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        Category::factory()->create([
            'name' => 'Costumes',
            'status' => 1,
            'parent_id' => 0,
            'added_by' => 1,
            'updated_by' => 1,
            'store_id' => env('STORE_ID', 'UNK'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
