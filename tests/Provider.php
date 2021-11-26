<?php

namespace Lucky\Encryption\Test;

use Lucky\Encryption\AESEncrypter;

trait Provider
{
    public function registerEncrypter()
    {
        return new AESEncrypter(base64_decode("EdalM50ursgBwgywnU4EkcMZlH79rDlPCbmF96sW73g="));
    }
}
