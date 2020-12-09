<?php

namespace App\Models\Photo;

use App\Models\Dao;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use Dao;
    /**
     * 数据库表
     * @var
     */
    protected $table = 'photo';

    /**
     * 时间戳自动更新开关
     * @var
     */
    public $timestamps = true;
}
