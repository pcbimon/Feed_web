<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(TypeUserSeeder::class);
         $this->call(SubjectAnalysisSeeder::class);
         $this->call(SectionUserSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(ProductDetailSeeder::class);
         $this->call(LabOperationSeeder::class);
    }
}
