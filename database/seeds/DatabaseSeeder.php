<?php


use App\Robot;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $robots = factory(Robot::class, 100)->create();
        $users = factory(User::class, 100)->create();

        foreach ($robots as $robot) {
            DB::table('robot_user')->insert([
                'robot_id' => $robot->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
