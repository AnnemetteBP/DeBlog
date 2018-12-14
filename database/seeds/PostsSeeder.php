<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Tux is crazy',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Second',
            'rating' => 3,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Sleeping monster',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Sleep',
            'rating' => 4,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Forced loved',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Love',
            'rating' => 6,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Panic at the litter box',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'Panic',
            'rating' => 2,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Flat kitty',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'flat earth',
            'rating' => 5,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
        DB::table('posts')->insert([
            'title' => 'Cream and chocolate',
            'body' => 'Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.Lorem ipsum larum lai. Lorem ipsum larum lai.',
            'tags' => 'cat',
            'rating' => 1,
            'picture' => 'https://www.goodfood.com.au/content/dam/images/g/w/s/o/j/y/image.related.wideLandscape.940x529.gxw7qa.png/1503298918510.jpg',
        ]);
    }
}
