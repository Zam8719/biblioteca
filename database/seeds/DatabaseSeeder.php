<?php

use App\Book;
use App\Loan;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        Book::truncate();
        Loan::truncate();

        $cantUser = 500;
        $cantBooks = 200;
        $cantLoan = 50;

        factory(User::class, $cantUser)->create();
        factory(Book::class, $cantBooks)->create();

        factory(Loan::class, $cantLoan)->create();
        /*->each(
            function($loan) use ($user){
                $randomUser = $user->random(mt_rand(1, 500)->pluck('id'));
                $loan->user->attach($randomUser);
                $randomBook = $book->random(mt_rand(1, 200)->pluck('id'));
                $loan->book->attach($randomBook);
            }
        )*/
        

        Schema::enableForeignKeyConstraints();

    }
}
