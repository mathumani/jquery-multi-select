<?php 

require_once ("model/Class.php");

use Model\StudentClass as StudentClass;
use PHPUnit\FrameWork\TestCase;

class TestsModelClass extends TestCase
{
	protected $Class	= NULL;

	protected function setUp () :void {
		$this->Class = new StudentClass();
	}

	protected function tearDown () :void {
		$this->Class = NULL;
	}

	public function test_getMessage_Method () {
		$pfld = array ("id", "level", "name");
		$message = array (
			"Invalid id, can start from 1 and must not exceed 2147483646",
			"Invalid level, can be upper alphabet and must not exceed 30 characters",
			"Invalid name, can be upper alphabet and must not exceed 30 characters"
		);
		for ($i = 0; $i < sizeof($pfld); $i++) {
			$f = $pfld[$i];
			$m = $message[$i];
			$this->assertTrue(is_string($this->Class->getMessage($f)));
			$this->assertEquals($m, $this->Class->getMessage($f));
		}

		$ffld	= "#invalid";
		$msg	= "Invalid StudentClass field $ffld does not exists";
		$this->expectException(Model\StudentClassException::class);
		$this->expectExceptionCode(1001);
		$this->expectExceptionMessage($msg);
		$this->Class->getMessage($ffld);
	}

	public function test_getMatch () {
		$match = array (
			"/^[1-9]{1}[0-9]*$/",
			"/^[A-Z\s]{3,30}$/",
			"/^[A-Z\s]{3,30}$/"
		);
		$mkey	= array ("id", "level", "name");
		for ($i = 0; $i < sizeof($match); $i++) {
			$k = $mkey[$i];
			$m = $match[$i];
			$this->assertTrue(is_string($this->Class->getMatch($k)));
			$this->assertEquals($m, $this->Class->getMatch($k));
		}

		$fmatch	= "#invalid";
		$msg	= "Invalid StudentClass field $fmatch does not exists";
		$this->expectException(Model\StudentClassException::class);
		$this->expectExceptionCode(1001);
		$this->expectExceptionMessage($msg);
		$this->Class->getMatch($fmatch);
	}

	public function test_setID_and_getID_Methods () {
		$pid = 10;
		$this->assertTrue($this->Class->setID($pid));
		$this->assertEquals($pid, $this->Class->getID());

		$fid	= array (0, 2147483647);
		$msg	= $this->Class->getMessage("id");
		for ($i = 0; $i < sizeof($fid); $i++) {
			$id = $fid[$i];
			$this->expectException(Model\StudentClassException::class);
			$this->expectExceptionCode(1002);
			$this->expectExceptionMessage($msg);
			$this->Class->setID($id);
		}
	}

	public function test_setLevel_and_getLevel_Methods () {
		$plevel	= array ("PRIMARY", "SECONDARY");
		for ($i = 0; $i < sizeof($plevel); $i++) {
			$l = $plevel[$i];
			$this->assertTrue($this->Class->setLevel($l));
			$this->assertEquals($l, $this->Class->getLevel());
		}

		$flevel = "#INVALID";
		$msg	= $this->Class->getMessage("level");
		$this->expectException(Model\StudentClassException::class);
		$this->expectExceptionCode(1002);
		$this->expectExceptionMessage($msg);
		$this->Class->setLevel($flevel);
	}

	public function test_setName_and_getName_Methods () {
		$pname = array("STANDARD I", "STANDARD II", "STANDARD III",
			"STANDARD IV", "STANDARD V", "STANDARD VI",
			"STANDARD VII", "FORM I", "FORM II", "FORM III",
			"FORM IV", "FORM V", "FORM VI"
		);
		for ($i = 0; $i < sizeof($pname); $i++) {
			$n = $pname[$i];
			$this->assertTrue($this->Class->setName($n));
			$this->assertEquals($n, $this->Class->getName());
		}

		$fname	= "#INVALID";
		$msg	= $this->Class->getMessage("name");
		$this->expectException(Model\StudentClassException::class);
		$this->expectExceptionCode(1002);
		$this->expectExceptionMessage($msg);
		$this->Class->setName($fname);
	}
}
