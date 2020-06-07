<?php


use Illuminate\Database\Seeder;
use App\Company;
use App\Contact;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 10)->create()->each(function ($company) {
            $company->contacts()->saveMany(
                factory(Contact::class, rand(2, 10))->make()
            );
        });
    }
}
