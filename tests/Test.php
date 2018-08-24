<?php

require 'User.php';

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase{

    public function testAttribute() {
        $this->assertClassHasAttribute('id', User::class);
        $this->assertClassHasAttribute('email', User::class);
        $this->assertClassHasAttribute('createAt', User::class);
    }
}

?>
