<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Agent;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::where('name','User')->first()->id;
        $adminRole = Role::where('name','Admin')->first();
        $agentRole = Role::where('name','Agent')->first()->id;

        $user = User::create([
        'name' => 'User',
        'email' => 'user@gmail.com',
        'cell_no' => '03091312025',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user->created_by = $user->id;
        $user->updated_by = $user->id;
        $user->save();
        $user->assignRole([$userRole]);
        
        $block = User::create([
            'name' => 'block',
            'email' => 'block@gmail.com',
            'cell_no' => '03091312011',
            'password' => Hash::make('Block123'),
            'city_id' => 2,
            'country_id' => 162,
    
            ]);
            $block->created_by = $block->id;
            $block->updated_by = $block->id;
            $block->save();
            $block->assignRole([$userRole]);
            


            $block1 = User::create([
                'name' => 'block1',
                'email' => 'block1@gmail.com',
                'cell_no' => '03091212222',
                'password' => Hash::make('Block123'),
                'city_id' => 2,
                'country_id' => 162,
        
                ]);
                $block1->created_by = $block1->id;
                $block1->updated_by = $block1->id;
                $block1->save();
                $block1->assignRole([$userRole]);
                



                $block2 = User::create([
                    'name' => 'block2',
                    'email' => 'block2@gmail.com',
                    'cell_no' => '0309222202',
                    'password' => Hash::make('Block123'),
                    'city_id' => 2,
                    'country_id' => 162,
            
                    ]);
                    $block2->created_by = $block2->id;
                    $block2->updated_by = $block2->id;
                    $block2->save();
                    $block2->assignRole([$userRole]);
                    




                    $block3 = User::create([
                        'name' => 'Block3',
                        'email' => 'block3@gmail.com',
                        'cell_no' => '03091313335',
                        'password' => Hash::make('Block123'),
                        'city_id' => 2,
                        'country_id' => 162,
                
                        ]);
                        $block3->created_by = $block3->id;
                        $block3->updated_by = $block3->id;
                        $block3->save();
                        $block3->assignRole([$userRole]);
                        
    
    
    

                        $block4 = User::create([
                            'name' => 'Block4',
                            'email' => 'block44@gmail.com',
                            'cell_no' => '03091344445',
                            'password' => Hash::make('Block123'),
                            'city_id' => 2,
                            'country_id' => 162,
                    
                            ]);
                            $block4->created_by = $block4->id;
                            $block4->updated_by = $block4->id;
                            $block4->save();
                            $block4->assignRole([$userRole]);
                            
        
                            $block5 = User::create([
                                'name' => 'Block5',
                                'email' => 'block5@gmail.com',
                                'cell_no' => '03091555025',
                                'password' => Hash::make('Block123'),
                                'city_id' => 2,
                                'country_id' => 162,
                        
                                ]);
                                $block5->created_by = $block5->id;
                                $block5->updated_by = $block5->id;
                                $block5->save();
                                $block5->assignRole([$userRole]);
        

                                $block6 = User::create([
                                    'name' => 'Block6',
                                    'email' => 'block6@gmail.com',
                                    'cell_no' => '06091312025',
                                    'password' => Hash::make('Block123'),
                                    'city_id' => 2,
                                    'country_id' => 162,
                            
                                    ]);
                                    $block6->created_by = $block6->id;
                                    $block6->updated_by = $block6->id;
                                    $block6->save();
                                    $block6->assignRole([$userRole]);
            
    
                                    $block7 = User::create([
                                        'name' => 'Block7',
                                        'email' => 'block7@gmail.com',
                                        'cell_no' => '03091772025',
                                        'password' => Hash::make('Block123'),
                                        'city_id' => 2,
                                        'country_id' => 162,
                                
                                        ]);
                                        $block7->created_by = $block7->id;
                                        $block7->updated_by = $block7->id;
                                        $block7->save();
                                        $block7->assignRole([$userRole]);
                

                                        
                                $block8 = User::create([
                                    'name' => 'Block8',
                                    'email' => 'block8@gmail.com',
                                    'cell_no' => '03091889025',
                                    'password' => Hash::make('Block123'),
                                    'city_id' => 2,
                                    'country_id' => 162,
                            
                                    ]);
                                    $block8->created_by = $block8->id;
                                    $block8->updated_by = $block8->id;
                                    $block8->save();
                                    $block8->assignRole([$userRole]);
            
                                            
                                $block9 = User::create([
                                    'name' => 'Block9',
                                    'email' => 'block9@gmail.com',
                                    'cell_no' => '03091399925',
                                    'password' => Hash::make('Block123'),
                                    'city_id' => 2,
                                    'country_id' => 162,
                            
                                    ]);
                                    $block9->created_by = $block9->id;
                                    $block9->updated_by = $block9->id;
                                    $block9->save();
                                    $block9->assignRole([$userRole]);
            

                                            
                                $block10 = User::create([
                                    'name' => 'Block10',
                                    'email' => 'block10@gmail.com',
                                    'cell_no' => '03091310025',
                                    'password' => Hash::make('Block123'),
                                    'city_id' => 2,
                                    'country_id' => 162,
                            
                                    ]);
                                    $block10->created_by = $block10->id;
                                    $block10->updated_by = $block10->id;
                                    $block10->save();
                                    $block10->assignRole([$userRole]);
            
    
        
        $user3 = User::create([
        'name' => 'User3',
        'email' => 'user3@gmail.com',
        'cell_no' => '03091312023',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user3->created_by = $user3->id;
        $user3->updated_by = $user3->id;
        $user3->save();
        $user3->assignRole([$userRole]);

        
        
        $user4 = User::create([
        'name' => 'User4',
        'email' => 'user4@gmail.com',
        'cell_no' => '03091312024',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user4->created_by = $user4->id;
        $user4->updated_by = $user4->id;
        $user4->save();
        $user4->assignRole([$userRole]);

        
        
        $user5 = User::create([
        'name' => 'User5',
        'email' => 'user5@gmail.com',
        'cell_no' => '03091312055',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user5->created_by = $user5->id;
        $user5->updated_by = $user5->id;
        $user5->save();
        $user5->assignRole([$userRole]);

        
        
        $user6 = User::create([
        'name' => 'User6',
        'email' => 'user6@gmail.com',
        'cell_no' => '03091312066',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user6->created_by = $user6->id;
        $user6->updated_by = $user6->id;
        $user6->save();
        $user6->assignRole([$userRole]);

        
        
        $user7 = User::create([
        'name' => 'User7',
        'email' => 'user7@gmail.com',
        'cell_no' => '03091312077',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user7->created_by = $user7->id;
        $user7->updated_by = $user7->id;
        $user7->save();
        $user7->assignRole([$userRole]);

        
        
        $user8 = User::create([
        'name' => 'User8',
        'email' => 'user8@gmail.com',
        'cell_no' => '03091312088',
        'password' => Hash::make('User123'),
        'city_id' => 2,
        'country_id' => 162,

        ]);
        $user8->created_by = $user8->id;
        $user8->updated_by = $user8->id;
        $user8->save();
        $user8->assignRole([$userRole]);

        
        
       

        

        $user2 = User::create([

            'name' => 'Agent',
            'email' => 'Agent@gmail.com',
            'cell_no' => '03091312026',
            'password' => Hash::make('User123'),
            'city_id' => 2,
            'country_id' => 162,
    
            ]);

        $agent = Agent::create([

            'user_id' => $user2->id,
            'name' => 'Real Estate Tiger',
            'email' => 'ret@gmail.com',
            'cell' => '03094312025',
            'address' => 'lahore America Florida Japan England',
            'logo' => 'https://cdn.logo.com/hotlink-ok/logo-social.png',
            
            ]);
            $user2->assignRole([$agentRole]);
            $user2->created_by = $user2->id;
            $user2->updated_by = $user2->id;
            $user2->save();




            $agent1 = Agent::create([

                'user_id' => $user3->id,
                'name' => 'Real Estate Tiger',
                'email' => 'ret@gmail.com',
                'cell' => '03094312025',
                'address' => 'lahore America Florida Japan England',
                'logo' => 'https://cdn.logo.com/hotlink-ok/logo-social.png',
                
                ]);
                $user3->assignRole([$agentRole]);
                $user3->created_by = $user3->id;
                $user3->updated_by = $user3->id;
                $user3->save();
    
                $agent2 = Agent::create([

                    'user_id' => $user4->id,
                    'name' => 'Real Estate Tiger',
                    'email' => 'ret@gmail.com',
                    'cell' => '03094312025',
                    'address' => 'lahore America Florida Japan England',
                    'logo' => 'https://cdn.logo.com/hotlink-ok/logo-social.png',
                    
                    ]);
                    $user4->assignRole([$agentRole]);
                    $user4->created_by = $user4->id;
                    $user4->updated_by = $user4->id;
                    $user4->save();
    

                    $agent3 = Agent::create([

                        'user_id' => $user4->id,
                        'name' => 'Real Estate Tiger',
                        'email' => 'ret@gmail.com',
                        'cell' => '03094312025',
                        'address' => 'lahore America Florida Japan England',
                        'logo' => 'https://cdn.logo.com/hotlink-ok/logo-social.png',
                        
                        ]);
                        $user5->assignRole([$agentRole]);
                        $user5->created_by = $user5->id;
                        $user5->updated_by = $user5->id;
                        $user5->save();
        
    

                        $agent4 = Agent::create([

                            'user_id' => $user6->id,
                            'name' => 'Real Estate Tiger',
                            'email' => 'ret@gmail.com',
                            'cell' => '03094312025',
                            'address' => 'lahore America Florida Japan England',
                            'logo' => 'https://cdn.logo.com/hotlink-ok/logo-social.png',
                            
                            ]);
                            $user6->assignRole([$agentRole]);
                            $user6->created_by = $user6->id;
                            $user6->updated_by = $user6->id;
                            $user6->save();
            
        
    
    

            $admin = User::create([
                          
                'name' => 'Admin',
                'email' => 'Admin@gmail.com',
                'cell_no' => '03394312113',
                'password' => Hash::make('User123'),
                'city_id' => 2,
                'country_id' => 162,
    
            ]);
    
        
            


            $admin->created_by = $admin->id;
            $admin->updated_by = $admin->id;
            $admin->save();

            $permissions = Permission::pluck('id','id')->all();
            $adminRole->syncPermissions($permissions);
            $admin->assignRole([$adminRole->id]);



    }
}
