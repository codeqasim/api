<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Cms_content extends Model
{
    //
    protected $table = 'cms_content';
    protected $fillable = ['title','slug','desc','seo_keyword','seo_desc','seo_title','additional_link','target','status'];

}
