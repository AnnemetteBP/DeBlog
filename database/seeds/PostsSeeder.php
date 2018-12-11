<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'First recipe',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'First',
            'rating' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'Tux is crazy',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Second',
            'rating' => 3,
        ]);
        DB::table('posts')->insert([
            'title' => 'Sleeping monster',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Sleep',
            'rating' => 4,
        ]);
        DB::table('posts')->insert([
            'title' => 'Forced loved',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Love',
            'rating' => 6,
        ]);
        DB::table('posts')->insert([
            'title' => 'Panic at the litter box',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Panic',
            'rating' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => 'Flat kitty',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'flat earth',
            'rating' => 5,
        ]);
        DB::table('posts')->insert([
            'title' => 'Cream and chocolate',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'cat',
            'rating' => 1,
        ]);
    }
}
