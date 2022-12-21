<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics');
        $artistsList = '';
        $writersList = '';

        foreach ($comicsArray as $comic) {

            for ($i = 0; $i < count($comic['artists']); $i++) {
                $artistsList .= $comic['artists'][$i];
            };

            for ($i = 0; $i < count($comic['writers']); $i++) {
                $writersList .= $comic['writers'][$i];
            };

            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->artists = $artistsList;
            $newComic->writers = $writersList;
            $newComic->save();

            $artistsList = '';
            $writersList = '';
        }
    }
}
