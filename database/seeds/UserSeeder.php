<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@test.com',
            'mobile' => '0000000000',
            'aadhar_card'=>'00000000',
            'role'=>'0',
            'password' => Hash::make('00000')
            ]);   
            
            User::create([
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'mobile' => '0000000001',
                'aadhar_card'=>'00000001',
                'role'=>'1',
                'password' => Hash::make('00000')
                ]);     

             User::create([
                    'name' => 'SeedDistribution',
                    'email' => 'seed@test.com',
                    'mobile' => '0000000002',
                    'aadhar_card'=>'00000002',
                    'role'=>'2',
                    'password' => Hash::make('00000')
                    ]); 
             
            User::create([
                        'name' => 'Soil Testing',
                        'email' => 'soil@test.com',
                        'mobile' => '0000000003',
                        'aadhar_card'=>'00000003',
                        'role'=>'3',
                        'password' => Hash::make('00000')
                        ]);            
    
             User::create([
                         'name' => 'Buyer',
                            'email' => 'buyer@test.com',
                            'mobile' => '0000000004',
                            'aadhar_card'=>'00000004',
                            'role'=>'4',
                            'password' => Hash::make('00000')
                            ]);     

            User::create([
                                'name' => 'Farmer',
                                'email' => 'farmer@test.com',
                                'mobile' => '0000000005',
                                'aadhar_card'=>'00000005',
                                'role'=>'5',
                                'password' => Hash::make('00000')
                                ]);                     
    }
}

