<?php

namespace app\Core;

/**
 * @author Sinmiloluwa <emmasimons141@gmail.com>
*/

class Response 
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}