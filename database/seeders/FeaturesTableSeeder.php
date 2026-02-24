<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'feature_name' =>'Model',
            'description' =>'Handles the logic and interacts with the data by receiving, storing, and updating it.'
        ]);

        Feature::create([
            'feature_name' =>'View',
            'description' =>'It is responsible for displaying the webpage of the app. It also contains the design and layout of the webpage.'
        ]);

        Feature::create([
            'feature_name' =>'Controller',
            'description' =>'It handles user request and the logic  of the webpage. Help organize the code of the application.'
        ]);

        Feature::create([
            'feature_name' =>'Routes',
            'description' =>'Routes are responsible for the URL. Connect user request to the controller.'
        ]);

        Feature::create([
            'feature_name' =>'Middleware',
            'description' =>'It filters the request before proceeding to the webpage itself. Handles the authentication of the webpage.'
        ]);

        Feature::create([
            'feature_name' =>'Blade Templates',
            'description' =>'The layout of the webpage. Makes it easier for user to design the templates faster with already existing layouts.'
        ]);

        Feature::create([
            'feature_name' =>'Migrations',
            'description' =>'Migrations also handles data but it helps update it when there are changes to the database. Create and modify database using code.'
        ]);

        Feature::create([
            'feature_name' =>'Seeders',
            'description' =>'This populates the database. Data that is being inserted.'
        ]);

        Feature::create([
            'feature_name' =>'Database',
            'description' =>'Stores all the data of the webpage. Useful for managing user and system data.'
        ]);

        Feature::create([
            'feature_name' =>'Eloquent ORM',
            'description' =>'Is used by the model to help simplify SQL commands. It makes things more simple and easy when using SQL.'
        ]);
    }
}
