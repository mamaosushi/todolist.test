<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required|max:20'
    );
    public function getDetail()
    {
        $txt = $this->content;
        return $txt;
    }
}
