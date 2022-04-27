<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => 'エルメス',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => 'ルイ・ヴィトン',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => 'グッチ',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => 'その他',
            'sort_no' => 4,
        ]);
    }
}
