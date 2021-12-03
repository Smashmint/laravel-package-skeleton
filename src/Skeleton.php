<?php

namespace Vendor\Skeleton;

use Vendor\Skeleton\Exceptions\SkeletonException;

class Skeleton
{
    public function hello()
    {
        //throw new SkeletonException('Missing or invalid api key!');

        return 'hello world';
    }
}