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
            'role'=>'0',
            'aadhar_card_no'=>'13546469746164',
            'address'=>'Bihar',
            'village_id'=>'21',
            'password' => Hash::make('00000')
            ]);   
            
            User::create([
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'mobile' => '0000000001',
                'role'=>'1',
                'aadhar_card_no'=>'1354646976164',
                'address'=>'Bihar',
                'village_id'=>'21',
                'password' => Hash::make('00000')
                ]);     

             User::create([
                    'name' => 'SeedDistribution',
                    'email' => 'seed@test.com',
                    'mobile' => '0000000002',
                    'aadhar_card_no'=>'1354522469746164',
                    'address'=>'Bihar',
                    'village_id'=>'21',
                    'role'=>'2',
                    'password' => Hash::make('00000')
                    ]); 
             
            User::create([
                        'name' => 'Soil Testing',
                        'email' => 'soil@test.com',
                        'mobile' => '0000000003',
                        'aadhar_card_no'=>'13546469776164',
                        'address'=>'Bihar',
                        'village_id'=>'21',
                        'role'=>'3',
                        'password' => Hash::make('00000')
                        ]);            
    
             User::create([
                         'name' => 'Buyer',
                            'email' => 'buyer@test.com',
                            'mobile' => '0000000004',
                            'aadhar_card_no'=>'233546469746164',
                            'address'=>'Bihar',
                            'village_id'=>'21',
                            'role'=>'4',
                            'password' => Hash::make('00000')
                            ]);     

            User::create([
                                'name' => 'Farmer',
                                'email' => 'farmer@test.com',
                                'mobile' => '0000000005',
                                'aadhar_card_no'=>'1354645275746164',
                                'address'=>'Bihar',
                                'village_id'=>'21',
                                'role'=>'5',
                                'password' => Hash::make('00000')
                                ]);                     
    }
}

