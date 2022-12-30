<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Kaprodi;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Pembimbing;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'admin',            
        ]);

        Role::create([
            'name'=>'mahasiswa',            
        ]);

        Role::create([
            'name'=>'pembimbing',            
        ]);

        Role::create([
            'name'=>'kaprodi',            
        ]);

        Role::create([
            'name'=>'magangadm',            
        ]);

        User::create([
           'role_id' => '1',
           'email' => 'admin@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'fathan@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'sikasep@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'yona@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'permana@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'faiha@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '2',
           'email' => 'syahla@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '3',
           'email' => 'aji@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '4',
           'email' => 'betha@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);
        User::create([
           'role_id' => '5',
           'email' => 'magangadm@unsika.ac.id',
           'password' => '$2y$10$eSNWVVpJIwsTCWzESht/5uqxydJ3C8J10CN6mCqjd6zK/xCUsFRAu'
        ]);

        Mahasiswa::create([
         'nama_lengkap' => 'Fathan Pebrilliestyo Ridwan',
         'npm'=>'2010631170072',
         'tanggal_lahir'=>'17-02-2002',
         'no_telp'=>'08987335266',
         'prodi'=>'Informatika',
         'Kelas'=>'5C',
         'alamat'=>'awawdawdwadaw',
         'user_id'=>2
        ]);
    }
    
}
