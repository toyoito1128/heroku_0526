<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //ダミーデータ
        Todo::create([
            'content' => 'test',
        ]);

        Todo::create([
            'content' => 'test2',
        ]);
    }
}
