<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationResearchAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publication_research_area')->truncate();

        for($i=0; $i<100; $i++){
        	DB::table('publication_research_area')->insert([
	        	'publication_id' => rand(1, 100),
	        	'research_area_id' => rand(1, 10)
	    	]);
        }
    }
}
