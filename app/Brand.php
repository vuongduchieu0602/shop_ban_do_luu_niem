<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //khi tạo thường có mặc định created_at,update có thể null hoặc ko null
    public $timestamp = false; 
    protected $fillable = [
        'brand_name', 'brand_desc','brand_status'
    ];
    //nếu không có khóa chịnh mặc định là id -> có thể trong bảng không có cột id -> error
    protected $primaryKey = 'brand_id'; 
    protected $table = 'tbl_brand';

}
