<?php

namespace Bojaghi\Contract;

interface ContinyFactory
{
    public static function create(array|string $setup): Container;
}
