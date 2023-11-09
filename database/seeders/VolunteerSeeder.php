<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\TpsCoordinate;
use App\Models\Volunteer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = storage_path('app\public\data\relawan_data.json');
        $jsonData = json_decode(file_get_contents($jsonPath), true)['data'];

        DB::beginTransaction();

        try {
            foreach ($jsonData as $item) {
                $address = Address::create([
                    'district' => $item['dptData']['kecamatan'],
                    'village' => $item['dptData']['kelurahan']
                ]);

                $tpsCoordinate = TpsCoordinate::create([
                    'tps_address' => $item['dptData']['tps'][0]['alamat_tps'],
                    'latitude' => $item['dptData']['tps'][0]['latitude'],
                    'longitude' => $item['dptData']['tps'][0]['longitude'],
                    'tps_number' => $item['dptData']['tps'][0]['tps']
                ]);

                Volunteer::create([
                    'address_id' => $address->id,
                    'tps_coordinate_id' => $tpsCoordinate->id,
                    'nik' => $item['nik'],
                    'nkk' => $item['dptData']['nkk'],
                    'volunteer_name' => $item['relawan'],
                    'name' => $item['dptData']['nama'],
                    'gender' => $item['dptData']['jenis_kelamin'],
                    'phone' => trim($item['phone']),
                    'source' => $item['dptData']['source'],
                    'flag' => $item['dptData']['flag'],
                    'coordinator' => $item['koordinator'],
                    'is_agree' => $item['isAgree']
                ]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
