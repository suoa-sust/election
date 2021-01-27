<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Gallery;
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

        $year2019 = Year::create([
            'name' => '2019',
            'start' => '2018-01-26',
            'end' => '2019-01-30',
            'election_date' => '2019-01-31',
            'status' => 'COMPLETED'
        ]);

        $year2021 = Year::create([
            'name' => '2021',
            'start' => '2021-02-01',
            'end' => '2022-01-30',
            'election_date' => '2021-01-31',
            'status' => 'ACTIVE'
        ]);

        $year = Year::create([
            'name' => '2025',
            'start' => '2024-01-26',
            'end' => '2025-01-25',
            'election_date' => null,
            'status' => 'INACTIVE'
        ]);

        $year2 = Year::create([
            'name' => '2020',
            'start' => '2019-01-01',
            'end' => '2020-01-28',
            'election_date' => '2020-01-29',
            'status' => 'COMPLETED'
        ]);

        $seat = Seat::create(['name_bn' => 'স্ফটওয়্যার প্রকৌশলী', 'name' => 'Software Engineer', 'priority' => 20, 'status' => 'INACTIVE']);
        $president = Seat::create(['name_bn' => 'সভাপতি', 'name' => 'President', 'priority' => 1, 'status' => 'ACTIVE']);
        $vp = Seat::create(['name_bn' => 'সহ-সভাপতি', 'name' => 'Vice President', 'priority' => 2, 'status' => 'ACTIVE']);
        $gs = Seat::create(['name_bn' => 'সাধারণ সম্পাদক', 'name' => 'General Secretary', 'priority' => 3, 'status' => 'ACTIVE']);
        $ags = Seat::create(['name_bn' => 'সহ-সাধারণ সম্পাদক', 'name' => 'Assistant General Secretary', 'priority' => 4, 'status' => 'ACTIVE']);
        $treasurer = Seat::create(['name_bn' => 'কোষাধ্যক্ষ', 'name' => 'Treasurer', 'priority' => 5, 'status' => 'ACTIVE']);
        $exicutive_member = Seat::create(['name_bn' => 'কার্যনির্বাহী সদস্য', 'name' => 'Executive Member', 'priority' => 6, 'status' => 'ACTIVE']);

        Candidate::create([
            'name' => 'John Doe',
            'designation' => 'Software Engineer',
            'seat_id' => $seat->id,
            'panel' => 'Admin',
            'year_id' => $year->id,
            'number_of_votes' => '1',
            'status' => 'INACTIVE',
            'priority' => '100'
        ]);

        Candidate::create([
            'name' => 'মোহাম্মাদ মুর্শেদ আহমদ',
            'designation' => 'উপ পরিচালক (অর্থ ও হিসাব)',
            'seat_id' => $president->id,
            'year_id' => $year2->id,
            'number_of_votes' => '130',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আ.ন.ম জয়নাল আবেদীন',
            'designation' => 'হিসাব পরিচালক',
            'seat_id' => $president->id,
            'year_id' => $year2->id,
            'number_of_votes' => '114',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'এমরান আহমদ চৌধুরী',
            'designation' => 'নির্বাহী পরিবহন প্রকৌশলী',
            'seat_id' => $vp->id,
            'year_id' => $year2->id,
            'number_of_votes' => '129',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ ছালেহ আহমদ',
            'designation' => 'প্রিন্সিপাল ইন্সট্রুমেন্ট ইঞ্জিনিয়ার',
            'seat_id' => $vp->id,
            'year_id' => $year2->id,
            'number_of_votes' => '114',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আবু সাদাৎ মোহাম্মদ সায়েম তালুকদার',
            'designation' => 'সহকারী পরিচালক',
            'seat_id' => $gs->id,
            'year_id' => $year2->id,
            'number_of_votes' => '135',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);

        Candidate::create([
            'name' => 'মোঃ সিরাজুল ইসলাম',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $gs->id,
            'year_id' => $year2->id,
            'number_of_votes' => '110',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ ফারুক আহমদ',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $ags->id,
            'year_id' => $year2->id,
            'number_of_votes' => '107',
            'status' => 'ACTIVE',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোহাম্মদ আবুল কালাম চৌধুরী',
            'designation' => 'একাউন্টস অফিসার',
            'seat_id' => $ags->id,
            'year_id' => $year2->id,
            'number_of_votes' => '128',
            'status' => 'ELECTED',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ নাজমুল হক',
            'designation' => 'সহকারী রেজিস্ট্রার',
            'seat_id' => $treasurer->id,
            'year_id' => $year2->id,
            'number_of_votes' => '129',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোহাম্মদ মঈনুল হক',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $treasurer->id,
            'year_id' => $year2->id,
            'number_of_votes' => '109',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মোঃ জয়নাল ইসলাম চৌধুরী',
            'designation' => 'তত্ত্বাবধায়ক প্রকৌশলী',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '134',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ ছলিম মোহাম্মদ আব্দুল কাদির',
            'designation' => 'অতিরিক্ত রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '133',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আহমদ মাহবুব ফেরদৌসী',
            'designation' => 'উপ রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '142',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'আ ফ ম মিফতাউল হক',
            'designation' => 'উপ রেজিস্ট্রার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '146',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মখলিছুর রহমান',
            'designation' => 'সহকারী পরীক্ষা নিয়ন্ত্রক',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '127',
            'status' => 'ELECTED',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'শাহ আলম',
            'designation' => 'সহকারী রেজিস্ট্রার (স্টোর)',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '81',
            'status' => 'ACTIVE',
            'panel' => 'nationalist',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'মুজিবুর রহমান',
            'designation' => 'পরীক্ষা নিয়ন্ত্রক',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '136',
            'status' => 'ELECTED',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ হাবিবুর রহমান',
            'designation' => 'প্রধান প্রকৌশলী',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '115',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'ড. খন্দকার মোঃ মমিনুল হক',
            'designation' => 'প্রিন্সিপাল ইন্সট্রুমেন্ট ইঞ্জিনিয়ার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '112',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'সৈয়দ আহমেদ',
            'designation' => 'প্রোগ্রামার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '91',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'ডাঃ হাবিবুল ইসলাম',
            'designation' => 'মেডিকেল অফিসার',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '82',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);
        Candidate::create([
            'name' => 'নুরজাহান ফাতেমা',
            'designation' => 'প্রশাসনিক কর্মকর্তা',
            'seat_id' => $exicutive_member->id,
            'year_id' => $year2->id,
            'number_of_votes' => '119',
            'status' => 'ACTIVE',
            'panel' => 'awami',
            'priority' => '10'
        ]);

        $candidates2019 = [
            [
                'name' => 'ড. খন্দকার মোঃ মমিনুল হক',
                'designation' => 'প্রিন্সিপাল ইস্নট্রুমেন্ট ইঞ্জিনিয়ার',
                'seat_id' => $president->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '91',
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'মোহাম্মদ মুর্শেদ আহমদ',
                'designation' => 'উপ পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $president->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '139',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
                'priority' => '10'
            ],
            [
                'name' => 'জাকারিয়া বিশ্বাস',
                'designation' => 'উপ গ্রন্থাগারিক',
                'seat_id' => $vp->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '97',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'আবু জাফর মোঃ তামরিনুল হাঁসান',
                'designation' => 'সহকারী রেজিস্ট্রার',
                'seat_id' => $vp->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '129',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মোঃ ফখর উদ্দিন',
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $gs->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '111',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'আবু সাদাৎ মোহাম্মদ সায়েম তালুকদার',
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $gs->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মোঃ সিরাজুল ইসলাম',
                'designation' => 'সহকারী প্রশাসনিক কর্মকর্তা',
                'seat_id' => $ags->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '111',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'মোঃ মাহফুজুর রহমান',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $ags->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মোঃ রবিউল ইসলাম',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $treasurer->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '128',
                'status' => 'ELECTED',
                'panel' => 'awami',
            ],
            [
                'name' => 'আবুল বাশার মোঃ এনায়েত হোসেন',
                'designation' => 'স্টোর অফিসার',
                'seat_id' => $treasurer->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '101',
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'আ.ন.ম. জয়নাল আবেদীন',
                'designation' => 'হিসাব পরিচালক',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '131',
                'status' => 'ELECTED',
                'panel' => 'awami',
            ],
            [
                'name' => 'সৈয়দ হাবিবুর রহমান',
                'designation' => 'প্রধান প্রকৌশলী',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '98',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'এ.এস.এম. খয়রুল আক্তার চৌধুরী',
                'designation' => 'আই টি ম্যানেজার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '117',
                'status' => 'ELECTED',
                'panel' => 'awami',
            ],
            [
                'name' => 'শাহীন আহম্মদ চৌধুরী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '114',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'সেবিকা সুলতানা',
                'designation' => 'উপ গ্রন্থাগারিক',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '91',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'মোঃ জয়নাল আবেদীন',
                'designation' => 'সহকারী রেজিস্ট্রার (স্টোর)',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '95',
                'status' => 'ACTIVE',
                'panel' => 'awami',
            ],
            [
                'name' => 'মোঃ জয়নাল ইসলাম চৌধুরী',
                'designation' => 'তত্তাবধায়ক প্রকৌশলী',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '118',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মোঃ নঈমুল হক চৌধুরী',
                'designation' => 'অতিরিক্ত হিসাব পরিচালক',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '93',
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'সৈয়দ ছলিম মোহাম্মদ আব্দুল কাদির',
                'designation' => 'অতিরিক্ত রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '121',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'আহমদ মাহবুব ফেরদৌসী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '123',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মখলিছুর রহমান',
                'designation' => 'সহকারী পরীক্ষা নিয়ন্ত্রক',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '129',
                'status' => 'ELECTED',
                'panel' => 'nationalist',
            ],
            [
                'name' => 'মোঃ জয়নুল ইসলাম চৌধুরী',
                'designation' => 'সহকারী টেকনিক্যাল অফিসার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2019->id,
                'number_of_votes' => '75',
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
            ]
        ];

        foreach ($candidates2019 as $candidate) {
            Candidate::create($candidate);
        }

        $candidates2021 = [
            [
                'name' => 'মোঃ তাজিম উদ্দিন',
                'designation' => 'উপ মহাবিদ্যালয় পরিদর্শক',
                'seat_id' => $president->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'মোহাম্মদ মুর্শেদ আহমদ',
                'designation' => 'উপ পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $president->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '11'
            ],
            [
                'name' => 'মোহাম্মদ হেলাল হোসেন দেওয়ান',
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $vp->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'এমরান আহমদ চৌধুরী',
                'designation' => 'নির্বাহী পরিবহন প্রকৌশলী',
                'seat_id' => $vp->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '11'
            ],
            [
                'name' => 'মোঃ সিরাজুল ইসলাম',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $gs->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'মখলিছুর রহমান',
                'designation' => 'সহকারী পরীক্ষা নিয়ন্ত্রক',
                'seat_id' => $gs->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '11'
            ],

            [
                'name' => 'অশোক বর্মন অসীম',
                'designation' => 'একাউন্টস অফিসার',
                'seat_id' => $ags->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'সাহেদ আহমদ',
                'designation' => 'সিনিয়র সুপারভাইজার',
                'seat_id' => $ags->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '11'
            ],
            [
                'name' => 'মোঃ রবিউল ইসলাম',
                'designation' => 'প্রশাসনিক কর্মকর্তা',
                'seat_id' => $treasurer->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '10'
            ],
            [
                'name' => 'মোঃ নাজমুল হক',
                'designation' => 'সহকারী রেজিস্ট্রার',
                'seat_id' => $treasurer->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '11'
            ],
            [
                'name' => 'মোঃ মুজিবুর রহমান',
                'designation' => 'পরীক্ষা নিয়ন্ত্রক',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '15'
            ],
            [
                'name' => 'সৈয়দ হাবিবুর রহমান',
                'designation' => 'প্রধান প্রকৌশলী',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '16'
            ],
            [
                'name' => 'ড. খন্দকার মোঃ মমিনুল হক',
                'designation' => 'প্রিন্সিপাল ইন্সট্রুমেন্ট ইঞ্জিনিয়ার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '17'
            ],
            [
                'name' => 'এ.এস.এম. খয়রুল আক্তার চৌধুরী',
                'designation' => 'আই টি ম্যানেজার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '18'
            ],
            [
                'name' => 'মোঃ ফখর উদ্দিন',
                'designation' => 'সহকারী পরিচালক (অ: ও হি:)',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '19'
            ],
            [
                'name' => 'মোঃ জয়নাল আবেদীন',
                'designation' => 'সহকারী রেজিস্ট্রার (স্টোর)',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'awami',
                'priority' => '20'
            ],
            [
                'name' => 'মোঃ জয়নাল ইসলাম চৌধুরী',
                'designation' => 'তত্তাবধায়ক প্রকৌশলী',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '21'
            ],
            [
                'name' => 'সৈয়দ ছলিম মোহাম্মদ আব্দুল কাদির',
                'designation' => 'অতিরিক্ত রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '22'
            ],
            [
                'name' => 'আহমদ মাহবুব ফেরদৌসী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '24'
            ],
            [
                'name' => 'মোঃ ইউনুস আলী',
                'designation' => 'উপ রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '23'
            ],
            [
                'name' => 'আবু সাদাৎ মোহাম্মদ সায়েম তালুকদার',
                'designation' => 'সহকারী পরিচালক (অর্থ ও হিসাব)',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '25'
            ],
            [
                'name' => 'নঈম উদ্দিন আহমেদ',
                'designation' => 'সহকারী রেজিস্ট্রার',
                'seat_id' => $exicutive_member->id,
                'year_id' => $year2021->id,
                'number_of_votes' => 0,
                'status' => 'ACTIVE',
                'panel' => 'nationalist',
                'priority' => '26'
            ]
        ];

        foreach ($candidates2021 as $candidate) {
            Candidate::create($candidate);
        }

        $galleries = [
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2021',
                'url' => 'images/gallery/gallery1.jpg',
                'status' => 1,
                'priority' => 10 // here 10 gets more priority than 11
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2020',
                'url' => 'images/gallery/gallery2.jpg',
                'status' => 1,
                'priority' => 15
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2019',
                'url' => 'images/gallery/gallery10.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2018',
                'url' => 'images/gallery/gallery4.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2021',
                'url' => 'images/gallery/gallery13.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2020',
                'url' => 'images/gallery/gallery6.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => '2019',
                'url' => 'images/gallery/gallery7.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => 'General',
                'url' => 'images/gallery/gallery9.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => 'General',
                'url' => 'images/gallery/gallery11.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => 'General',
                'url' => 'images/gallery/gallery12.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => 'General',
                'url' => 'images/gallery/gallery14.jpg',
                'status' => 1,
                'priority' => 50
            ],
            [
                'caption' => 'Officers Election Photo Gallery',
                'tag' => 'General',
                'url' => 'images/gallery/gallery15.jpg',
                'status' => 1,
                'priority' => 12
            ]
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }

}
