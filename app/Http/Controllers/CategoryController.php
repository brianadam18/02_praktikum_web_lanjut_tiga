<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function eduGames() {
        echo 'Marbel - Educational Games, untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/category/marbel-edu-games">disini</a>';
    }
    public function kidsGames() {
        echo 'Home / Marbel & Friends - Kids Games, untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/category/marbel-and-friends-kids-games">disini</a>';
    }
    public function books() {
        echo 'Home / Riri - Story Books, untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/category/riri-story-books">disini</a>';
    }
    public function songs() {
        echo 'Home / Kolak - Kids Songs, untuk selengkapnya silahkan Klik <a target="_blank" rel="noopener noreferrer" href="https://www.educastudio.com/category/kolak-kids-songs">disini</a>';
    }
}
