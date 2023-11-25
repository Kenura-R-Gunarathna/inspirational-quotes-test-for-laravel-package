<?php
namespace Kenura\Inspire\Controllers;

use Kenura\Inspire\Inspire;

class InspirationController
{

    public function single(Inspire $inspire) {

        return $inspire->single();
    }

    public function multiple(Inspire $inspire, int $count) {

        return $inspire->multiple($count);

    }

}