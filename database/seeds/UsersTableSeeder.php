<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        $roles = [
            [
                'name' => 'Administrateur',
                'slug' => 'admin',
                'permissions' => [
                    'admin' => true,
                ]
            ],
            [
                'name' => 'Editeur',
                'slug' => 'editeur',
                'permissions' => [
                    'admin' => true,
                ]
            ],
            [
                'name' => 'Redacteur',
                'slug' => 'redacteur',
                'permissions' => [
                    'admin' => true,
                ]
            ],
            [
                'name' => 'Membre',
                'slug' => 'membre',
                'permissions' => [
                    'admin' => true,
                ]
            ],
            [
                'name' => 'Abonnee',
                'slug' => 'abonne',

            ],


        ];
        foreach ($roles as $role){
            Sentinel::getRoleRepository()->createModel()->create($role);
        }

        $admin = [
            'email'    => 'admin@example.com',
            'password' => 'password',
            'prenom' => str_random(8),
            'nom' => str_random(6),
        ];
        $editeur = [
            'email'    => 'editeur@example.com',
            'password' => 'password',
            'prenom' => str_random(8),
            'nom' => str_random(6),
        ];
        $redacteur = [
            'email'    => 'redacteur@example.com',
            'password' => 'password',
            'prenom' => str_random(8),
            'nom' => str_random(6),
        ];
        $membres = [
            [
                'email'    => 'membre1@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'membre2@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'membre3@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'membre4@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'membre5@example.com',
                'prenom' => str_random(8),
                'nom' => str_random(6),
                'password' => 'demo123',
            ],
            [
                'email'    => 'membre6@example.com',
                'prenom' => str_random(8),
                'nom' => str_random(6),
                'password' => 'demo123',
            ],
            [
                'email'    => 'membre7@example.com',
                'prenom' => str_random(8),
                'nom' => str_random(6),
                'password' => 'demo123',
            ],
            [
                'email'    => 'membre8@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
        ];
        $abonnes = [
            [
                'email'    => 'abonne1@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'abonne2@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'abonne3@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ],
            [
                'email'    => 'abonne4@example.com',
                'password' => 'demo123',
                'prenom' => str_random(8),
                'nom' => str_random(6),
            ]
        ];
        $adminUser = Sentinel::registerAndActivate($admin);
        $adminRole = Sentinel::findRoleBySlug('admin');
        $adminRole->users()->attach($adminUser);
        $membreRole = Sentinel::findRoleBySlug('membre');
        $abonneRole = Sentinel::findRoleBySlug('abonne');
        $editeurRole = Sentinel::findRoleBySlug('editeur');
        $editeurUser = Sentinel::registerAndActivate($editeur);
        $editeurRole->users()->attach($editeurUser);
        $redacteurRole = Sentinel::findRoleBySlug('redacteur');
        $redacteurUser = Sentinel::registerAndActivate($redacteur);
        $redacteurRole->users()->attach($redacteurUser);
        foreach ($membres as $membre)
        {
            $membreUser =  Sentinel::registerAndActivate($membre);
            $membreRole->users()->attach($membreUser);

        }
        foreach ($abonnes as $abonne)
        {
            $abonneUser =  Sentinel::registerAndActivate($abonne);
            $abonneRole->users()->attach($abonneUser);
        }
    }
}
