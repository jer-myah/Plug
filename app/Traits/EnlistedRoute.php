<?php

namespace App\Traits;

trait EnlistedRoute {

    public function enlistedRoute() {
        $v1 = 'api/v1';

        return [
            $v1,
            $v1."/register",
            $v1."/login",
            $v1."/dashboard",
            $v1."/profile",
        ];
    }

}
