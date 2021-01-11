<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Seat;
use App\Models\Year;
use Illuminate\Database\Seeder;

class MscSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create([
            'name' => '2019',
            'start' => '2019-01-26',
            'end' => '2020-01-25',
            'status' => 'COMPLETED'
        ]);
        $year2 = Year::create([
            'name' => '2020',
            'start' => '2020-01-26',
            'end' => '2021-01-25',
            'status' => 'ACTIVE'
        ]);
        $seat1 = Seat::create(['name' => 'Vice-President', 'priority' => 10, 'status' => 'ACTIVE']);
        Seat::create(['name' => 'President', 'priority' => 5, 'status' => 'ACTIVE']);
        Seat::create(['name' => 'Executive Member', 'priority' => 25, 'status' => 'ACTIVE']);

        Candidate::create([
            'name' => 'John Doe',
            'designation' => 'Software Engineer',
            'seat_id' => $seat1->id,
            'year_id' => $year2->id,
            'status' => 'ACTIVE'
        ]);
    }
}
