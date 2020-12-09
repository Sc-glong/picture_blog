<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UsersRequest;
use App\Models\Photo\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use JWTAuth;
use JWTFactory;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TestController extends CommonController
{
    public function test()
    {
        $payTypeConf = config('inc.payTypeConf');

        dd($payTypeConf);

    }

    public function testDot()
    {
        $arr = [
            1 => "837483",
            "name" => [
                'first_name' => [
                    1 => 4,
                    9 => 8
                ],
                'last_name' => "guolong"
            ],
            4 => 238498
        ];
//        dump(Arr::collapse($arr));
//
//        dump(Arr::dot($arr));

        Arr::forget($arr,['last_name',9]);
        dump($arr);

        dump(Str::camel("last_name"));
    }

    /**
     * test constom the class of request
     *
     * @param UsersRequest $request
     * @return mixed
     */
    public function testRequest(UsersRequest $request)
    {
        $userId = $request->uid;

        return $userId;
    }

    /**
     * test dao
     *
     * @param Photo $photo
     * @return mixed
     *
     * @throws \Exception
     */
    public function testDao(Photo $photo)
    {
         return $photo->getDataByWhereForSelect(['id'=>1],false);
    }
}
