<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;

class AddCompanyCommand extends Command
{
   
    protected $signature = 'contact:company';

    
    protected $description = 'Adds a new company';

   
    public function handle()


    {

        $name = $this->ask('what is your company name?');
        $phone = $this->ask('what is your company phone number?');

        if($this->confirm('Are you ready to insert company name is ' . $name . ' and company number is '.$phone)){

        $company = Company::create([
            'name' => $name,
            'phone' => $phone,
        ]);
       return $this->info('Added company name: '.$company->name.' and '.'Added company phone: '.$company->phone);
       
        }
        $this->warn('no new compnay added');
    }
}
