<?php
namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Seeder;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedCountries = [
            ['name' => 'Australia',],
            ['name' => 'Austria',],
            ['name' => 'Canada',],
            ['name' => 'England',],
            ['name' => 'Finland',],
            ['name' => 'France',],
            ['name' => 'Germany',],
            ['name' => 'Greenland',],
            ['name' => 'Ireland',],
            ['name' => 'Italy',],
            ['name' => 'Japan',],
            ['name' => 'Latvia',],
            ['name' => 'Mexico',],
            ['name' => 'Netherlands',],
            ['name' => 'Northern Ireland',],
            ['name' => 'Norway',],
            ['name' => 'NZ',],
            ['name' => 'Scotland',],
            ['name' => 'South Africa',],
            ['name' => 'Spain',],
            ['name' => 'Sweden',],
            ['name' => 'USA',],
            ['name' => 'Wales',],
        ];
        foreach ($seedCountries as $seed) {
            Country::create($seed);
        }
    }
}
