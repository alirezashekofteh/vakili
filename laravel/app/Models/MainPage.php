<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'aboutfooter'  , 'picmobile' , 'picdesk' ,'logo','picabout','about','insta','face','adress','tel','toeet','linkdin','email'
    ];
}
