<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table("cities")->insert([
            [
                "id"         => 1,
                "state_id"   => 1,
                "name"       => "adrar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 2,
                "state_id"   => 1,
                "name"       => "tamestt",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 3,
                "state_id"   => 1,
                "name"       => "charouine",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 4,
                "state_id"   => 1,
                "name"       => "reggane",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 5,
                "state_id"   => 1,
                "name"       => "inzegmir",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 6,
                "state_id"   => 1,
                "name"       => "tit",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 7,
                "state_id"   => 1,
                "name"       => "ksar kddour",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 8,
                "state_id"   => 1,
                "name"       => "tsabit",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 9,
                "state_id"   => 1,
                "name"       => "timimoun",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 10,
                "state_id"   => 1,
                "name"       => "ouled said",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 11,
                "state_id"   => 1,
                "name"       => "zaouiet kounta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 12,
                "state_id"   => 1,
                "name"       => "aoulef",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 13,
                "state_id"   => 1,
                "name"       => "timokten",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 14,
                "state_id"   => 1,
                "name"       => "tamentit",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 15,
                "state_id"   => 1,
                "name"       => "fenoughil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 16,
                "state_id"   => 1,
                "name"       => "tinerkouk",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 17,
                "state_id"   => 1,
                "name"       => "deldoul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 18,
                "state_id"   => 1,
                "name"       => "sali",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 19,
                "state_id"   => 1,
                "name"       => "akabli",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 20,
                "state_id"   => 11,
                "name"       => "metarfa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 21,
                "state_id"   => 1,
                "name"       => "ouled ahmed timmi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 22,
                "state_id"   => 1,
                "name"       => "bouda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 23,
                "state_id"   => 1,
                "name"       => "aougrout",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 24,
                "state_id"   => 1,
                "name"       => "talmine",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 25,
                "state_id"   => 1,
                "name"       => "bourdj badji mokhtar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 26,
                "state_id"   => 1,
                "name"       => "sbaa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 27,
                "state_id"   => 1,
                "name"       => "ouled aissa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 28,
                "state_id"   => 1,
                "name"       => "timiaouin",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 29,
                "state_id"   => 2,
                "name"       => "chlef",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 30,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 31,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 32,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 33,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 34,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 35,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 36,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 37,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 38,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 39,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 40,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 41,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 42,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 43,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 44,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 45,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => ,
                "state_id"   => 2,
                "name"       => "",
                "created_at" => $now,
                "updated_at" => $now,
            ],
		);

    }

}
