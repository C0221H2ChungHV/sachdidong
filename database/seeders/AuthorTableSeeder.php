<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->category_id = 1;
        $author->name = "Vũ Trọng Phụng";
        $author->year_of_birth = "1987-07-09";
        $author->year_of_dead = "2000-01-02";
        $author->age = 65;
        $author->country = "Việt Nam";
        $author->image = "images/authors/vutrongphung.jpeg";
        $author->description = "";
        $author->summary = "";
        $author->save();


        $author = new Author();
        $author->category_id = 1;
        $author->name = "Nam Cao";
        $author->year_of_birth = "1987-07-09";
        $author->year_of_dead = "2000-01-02";
        $author->age = 45;
        $author->country = "Việt Nam";
        $author->image = "images/authors/namcao.jpg";
        $author->total_books = 12;
        $author->description = "";
        $author->summary = "";
        $author->save();
    }
}
