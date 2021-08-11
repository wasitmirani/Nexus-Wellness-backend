<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function postArticle($request,$type="create"){
        $requestInput=[
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id,
        ];
        if($type=="update"){
            return Article::where('id',$request->id)->update($requestInput);
        }
        else {
            return   Article::create($requestInput);
        }


    }
}
