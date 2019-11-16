<?php

use Illuminate\Database\Seeder;

class JournalConferenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  
        $journaltypes = [
            ['name' => 'Respublika miqyosidagi'],
            ['name' => 'Xalqaro miqyosdagi']
        ];
        $conferencetypes = [
            ['name' => 'Respublika miqyosidagi'],
            ['name' => 'Xalqaro miqyosdagi']
        ];

        DB::table('journalTypes')->insert($journaltypes);
        DB::table('conferenceTypes')->insert($conferencetypes);
    }
}
