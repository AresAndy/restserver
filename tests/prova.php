<?php
use PHPUnit\Framework\TestCase;
require_once /*'../server.php';*/ __DIR__.'/../server.php';



class ClasseProva extends TestCase {

    protected function setUp(){
        $this->svr = new Rest\Server();
    }

    public function test_due_più_due (){
        $this->assertTrue(2+2 == 4, "ODDIOOOOO");
    }

    public function test_server_che_risponde_senza_curl (){
        setup_server($this->svr);

        ob_start();
        $this->svr->unittest_execute("GET", "/", false, false);
        $result = ob_get_clean();

        $this->assertContains($result, "ciao", "Noooo :(");
    }
}

