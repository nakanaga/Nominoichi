<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id'                  => 1,
            'name'                => 'カバン',
            'sort_no'             => 1,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 2,
            'name'                => '財布',
            'sort_no'             => 2,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 3,
            'name'                => 'その他',
            'sort_no'             => 3,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 4,
            'name'                => 'カバン',
            'sort_no'             => 4,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 5,
            'name'                => '財布',
            'sort_no'             => 5,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 6,
            'name'                => 'その他',
            'sort_no'             => 6,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 7,
            'name'                => 'カバン',
            'sort_no'             => 7,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 8,
            'name'                => '財布',
            'sort_no'             => 8,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 9,
            'name'                => 'その他',
            'sort_no'             => 9,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 10,
            'name'                => 'カバン',
            'sort_no'             => 10,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 11,
            'name'                => '財布',
            'sort_no'             => 11,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 12,
            'name'                => 'その他',
            'sort_no'             => 12,
            'primary_category_id' => 4,
        ]);
    }
}
