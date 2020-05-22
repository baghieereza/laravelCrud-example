<?php

namespace App;



use Session;

/**
 * Class helper
 *
 * @package \app
 */
class helper
{

    /**
     * @param $request
     *
     * @return string
     */
    public function upload($request)
    {
        $image = $request->file('file');
        $name = date('ymdHms').'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads'); //public path folder dir
        $image->move($destinationPath, $name);
        return $name;
    }
}
