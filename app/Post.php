<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name [By defaul lentelės pavadinimas turi būti "posts", bet jei norim pavadinti kažkaip kitaip tai darom šitaip]:
    protected $table = 'posts';

    // Primary Key [Taip pat kaip ir su table, by default turi būti "id", bet jei norim pavadinti kažkaip kitaip tai darom taip]:
    public $primaryKey = 'id';

    // Timestamp [Be defaultu timestamp reikšmė yra true, bet jei norim kad nenaudotų timestampų, tai galim nustatyti reikšmę į false]
    public $timestamp = true;

    
}
