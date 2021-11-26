<?php

namespace Lucky\Encryption\Test;

use PHPUnit\Framework\TestCase;

class EncryptTest extends TestCase
{
    use Provider;

    /**
     * @var Lucky\Encryption\Encrypter
     */
    protected $encrypter;

    public function __construct()
    {
        $this->encrypter = $this->registerEncrypter();
    }

    public function testEncrypt()
    {
        $this->assertEquals(
            $this->encrypter->encrypt(12345678),
            "eyJpdiI6Ik1EQXdNREF3TURBd01EQXdNREF3TUE9PSIsInZhbHVlIjoiSWxzTjUzVzZFNTljd3laa3lYdXFkQT09IiwibWFjIjoiY2U5ZTgyNTAwYmNjMDkwNTY4YjQ5YjExZGRhMTY1OGRmOTA3MzA5MjljZDM2OWM1YWZhOTUzN2Q2YzU1NGQ3NyJ9",
            "加密成功"
        );
    }

    public function testDecrypt()
    {
        $this->assertEquals(
            $this->encrypter->decrypt("eyJpdiI6Ik1EQXdNREF3TURBd01EQXdNREF3TUE9PSIsInZhbHVlIjoiSWxzTjUzVzZFNTljd3laa3lYdXFkQT09IiwibWFjIjoiY2U5ZTgyNTAwYmNjMDkwNTY4YjQ5YjExZGRhMTY1OGRmOTA3MzA5MjljZDM2OWM1YWZhOTUzN2Q2YzU1NGQ3NyJ9"),
            12345678,
            "解密成功"
        );
    }
}
