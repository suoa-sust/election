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
        $year = Year::create([
            'name' => '2021',
            'start' => '2019-01-26',
            'end' => '2020-01-25',
            'status' => 'COMPLETED'
        ]);

        $year2019 = Year::create([
            'name' => '2019',
            'start' => '2019-01-26',
            'end' => '2020-01-25',
            'status' => 'COMPLETED'
        ]);

        $seat = Seat::create(['name' => 'Software Engineer', 'priority' => 1, 'status' => 'ACTIVE']);
        $p2019 = Seat::create(['name' => 'সভাপতি', 'priority' => 1, 'status' => 'ACTIVE']);
        $vp2019 = Seat::create(['name' => 'সহ-সভাপতি', 'priority' => 2, 'status' => 'ACTIVE']);
        $gs2019 = Seat::create(['name' => 'সাধারণ সম্পাদক', 'priority' => 3, 'status' => 'ACTIVE']);
        $ags2019 = Seat::create(['name' => 'সহ-সাধারণ সম্পাদক', 'priority' => 4, 'status' => 'ACTIVE']);
        $treasurer2019 = Seat::create(['name' => 'কোষাধ্যক্ষ', 'priority' => 5, 'status' => 'ACTIVE']);
        $member2019 = Seat::create(['name' => 'কার্যনির্বাহী সদস্য', 'priority' => 6, 'status' => 'ACTIVE']);

        Candidate::create([
            'name' => 'John Doe',
            'designation' => 'Software Engineer',
            'seat_id' => $seat->id,
            'year_id' => $year->id,
            'status' => 'ACTIVE',
            'panel' => 'Admin',
            'priority' => '10'
        ]);

        $candidates2019 = [
            [
                'name' => 'ড. খন্দকার মোঃ মমিনুল হক',
                'designation' => 'প্রিন্সিপাল ইস্নট্রুমেন্ট ইঞ্জিনিয়ার',
                'seat_id' => $p2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '91',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => '10'
                ],
            [
                'name' => 'মোহাম্মদ মুর্শেদ আহমদ',
                'designation' => 'উপ পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $p2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '139',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => '10'
                ],
            [
                'name' => 'জাকারিয়া বিশ্বাস',
                'designation' => 'উপ গ্রন্থাগারিক',
                'seat_id' => $vp2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '97',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'আবু জাফর মোঃ তামরিনুল হাঁসান',
                'designation' => 'সহকারী রেজিস্ট্রার',
                'seat_id' => $vp2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '129',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ ফখর উদ্দিন',
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $gs2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '111',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'আবু সাদাৎ মোহাম্মদ সায়েম তালুকদার' ,
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $gs2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ সিরাজুল ইসলাম',
                'designation' => 'সহকারী প্রশাসনিক কর্মকর্তা',
                'seat_id' => $ags2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '111',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ মাহফুজুর রহমান',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $ags2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ রবিউল ইসলাম',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $treasurer2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '128',
                'status' => 'ELECTED',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'আবুল বাশার মোঃ এনায়েত হোসেন',
                'designation' => 'স্টোর অফিসার',
                'seat_id' => $treasurer2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '101',
                'status' => 'ACTIVE',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'আ.ন.ম. জয়নাল আবেদীন',
                'designation' => 'হিসাব পরিচালক',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '131',
                'status' => 'ELECTED',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'সৈয়দ হাবিবুর রহমান',
                'designation' => 'প্রধান প্রকৌশলী',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '98',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'এ.এস.এম. খয়রুল আক্তার চৌধুরী',
                'designation' => 'আই টি ম্যানেজার',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '117',
                'status' => 'ELECTED',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'শাহীন আহম্মদ চৌধুরী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '114',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'সেবিকা সুলতানা',
                'designation' => 'উপ গ্রন্থাগারিক',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '91',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ জয়নাল আবেদীন',
                'designation' => 'সহকারী রেজিস্ট্রার (স্টোর)',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '95',
                'status' => 'ACTIVE',
                'panel' => '2',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ জয়নাল ইসলাম চৌধুরী',
                'designation' => 'তত্তাবধায়ক প্রকৌশলী',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ নঈমুল হক চৌধুরী',
                'designation' => 'অতিরিক্ত হিসাব পরিচালক',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '93',
                'status' => 'ACTIVE',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'সৈয়দ ছলিম মোহাম্মদ আব্দুল কাদির',
                'designation' => 'অতিরিক্ত রেজিস্ট্রার',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '121',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'আহমদ মাহবুব ফেরদৌসী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '123',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মখলিছুর রহমান',
                'designation' => 'সহকারী পরীক্ষা নিয়ন্ত্রক',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '129',
                'status' => 'ELECTED',
                'panel' => '1',
                'priority' => ''
                ],
            [
                'name' => 'মোঃ জয়নুল ইসলাম চৌধুরী',
                'designation' => 'সহকারী টেকনিক্যাল অফিসার',
                'seat_id' => $member2019->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '75',
                'status' => 'ACTIVE',
                'panel' => '1',
                'priority' => ''
                ]
        ];

        foreach ($candidates2019 as $candidate)
            Candidate::create($candidate);
    }
}
