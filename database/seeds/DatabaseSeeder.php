<?php


use App\Robot;
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
        factory(Robot::class, 100)->create();
//        factory(Robot::class)->create([
//            'student_id' => null,
//        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
