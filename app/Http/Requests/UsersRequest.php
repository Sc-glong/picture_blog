<?php
/**
 * users' request valiate
 *
 * @author glong
 * @email  15703276938@163.com
 * @date   2020-10-16
 */

namespace App\Http\Requests;

class UsersRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "uid" => "required|integer",
        ];
    }

}
