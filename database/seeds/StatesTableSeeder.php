<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = date("Y-m-d H:i:s");

        DB::table("states")->insert([
            [
                "id"         => 01,
                "name"       => "Adrar",
                "abbr"       => "01",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 02,
                "name"       => "Chlef",
                "abbr"       => "02",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 03,
                "name"       => "Laghouat",
                "abbr"       => "03",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 04,
                "name"       => "Oum El Bouaghi",
                "abbr"       => "04",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 05,
                "name"       => "Batna",
                "abbr"       => "05",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 06,
                "name"       => "Béjaïa",
                "abbr"       => "06",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 07,
                "name"       => "Biskra",
                "abbr"       => "07",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 08,
                "name"       => "Béchar",
                "abbr"       => "08",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 09,
                "name"       => "Blida",
                "abbr"       => "09",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 10,
                "name"       => "Bouira",
                "abbr"       => "10",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 11,
                "name"       => "Tamanrasset",
                "abbr"       => "11",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 12,
                "name"       => "Tébessa",
                "abbr"       => "12",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 13,
                "name"       => "Tlemcen",
                "abbr"       => "13",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 14,
                "name"       => "Tiaret",
                "abbr"       => "14",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 15,
                "name"       => "Tizi Ouzou",
                "abbr"       => "15",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 16,
                "name"       => "Alger",
                "abbr"       => "16",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 17,
                "name"       => "Djelfa",
                "abbr"       => "17",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 18,
                "name"       => "Jijel",
                "abbr"       => "18",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 19,
                "name"       => "Sétif",
                "abbr"       => "19",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 20,
                "name"       => "Saïda",
                "abbr"       => "20",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 21,
                "name"       => "Skikda",
                "abbr"       => "21",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 22,
                "name"       => "Sidi Bel Abbès",
                "abbr"       => "22",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 23,
                "name"       => "Annaba",
                "abbr"       => "23",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 24,
                "name"       => "Guelma",
                "abbr"       => "24",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 25,
                "name"       => "Constantine",
                "abbr"       => "25",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 26,
                "name"       => "Médéa",
                "abbr"       => "26",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 27,
                "name"       => "Mostaganem",
                "abbr"       => "27",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 28,
                "name"       => "M’Sila",
                "abbr"       => "28",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 29,
                "name"       => "Mascara",
                "abbr"       => "29",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 30,
                "name"       => "Ouargla",
                "abbr"       => "30",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 31,
                "name"       => "Oran",
                "abbr"       => "31",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 32,
                "name"       => "El Bayadh",
                "abbr"       => "32",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 33,
                "name"       => "Illizi",
                "abbr"       => "33",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 34,
                "name"       => "Bordj Bou Arreridj",
                "abbr"       => "34",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 35,
                "name"       => "Boumerdès",
                "abbr"       => "35",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 36,
                "name"       => "El Tarf",
                "abbr"       => "36",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 37,
                "name"       => "Tindouf",
                "abbr"       => "37",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 38,
                "name"       => "Tissemsilt",
                "abbr"       => "38",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 39,
                "name"       => "El Oued",
                "abbr"       => "39",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 40,
                "name"       => "Khenchela",
                "abbr"       => "40",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 41,
                "name"       => "Souk Ahras",
                "abbr"       => "41",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 42,
                "name"       => "Tipaza",
                "abbr"       => "42",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 43,
                "name"       => "Mila",
                "abbr"       => "43",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 44,
                "name"       => "Aïn Defla",
                "abbr"       => "44",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 45,
                "name"       => "Naâma",
                "abbr"       => "45",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 46,
                "name"       => "Aïn Témouchent",
                "abbr"       => "46",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 47,
                "name"       => "Ghardaïa",
                "abbr"       => "47",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 48,
                "name"       => "Relizane",
                "abbr"       => "48",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 49,
                "name"       => "Timimoun",
                "abbr"       => "49",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 50,
                "name"       => "Bordj Badji Mokhtar",
                "abbr"       => "50",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 51,
                "name"       => "Ouled Djellal",
                "abbr"       => "51",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 52,
                "name"       => "Béni Abbès",
                "abbr"       => "52",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 53,
                "name"       => "In Salah",
                "abbr"       => "53",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 54,
                "name"       => "In Guezzam",
                "abbr"       => "54",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 55,
                "name"       => "Touggourt",
                "abbr"       => "55",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 56,
                "name"       => "Djanet",
                "abbr"       => "56",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 57,
                "name"       => "El M’Ghair",
                "abbr"       => "57",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id"         => 58,
                "name"       => "El Meniaa",
                "abbr"       => "58",
                "created_at" => $now,
                "updated_at" => $now,
            ], 
        ]);

    }

}
