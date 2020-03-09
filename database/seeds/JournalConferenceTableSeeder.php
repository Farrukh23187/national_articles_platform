<?php

use Illuminate\Database\Seeder;
//use DB;
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

        DB::table('journal_types')->insert($journaltypes);
        DB::table('conference_types')->insert($conferencetypes);
    }
}
