<?php 

namespace Model;

class StudentClassException extends \Exception {};
class StudentClass
{
	protected $_id		= NULL;
	protected $_level	= NULL;
	protected $_name	= NULL;

	protected $message = array (
		"id"	=> "Invalid id, can start from 1 and must not exceed 2147483646",
		"level"	=> "Invalid level, can be upper alphabet and must not exceed 30 characters",
		"name"	=> "Invalid name, can be upper alphabet and must not exceed 30 characters"
	);

	protected $match = array (
		"id"	=> "/^[1-9]{1}[0-9]*$/",
		"level"	=> "/^[A-Z\s]{3,30}$/",
		"name"	=> "/^[A-Z\s]{3,30}$/"
	);

	public function getMatch ($key) :string {

		$msg = "Invalid StudentClass field $key does not exists";
		if (!array_key_exists($key, $this->match))
			throw new StudentClassException($msg, 1001);

		return (string) $this->match[$key];
	}

	public function getMessage ($key) :string {

		$msg = "Invalid StudentClass field $key does not exists";
		if (!array_key_exists($key, $this->message))
			throw new StudentClassException ($msg, 1001);

		return (string) $this->message[$key];
	}

	public function setID ($value) :bool {

		$match	= $this->getMatch("id");
		$msg	= $this->getMessage("id");
		if (!preg_match($match, $value) || $value > 2147483646)
			throw new StudentClassException($msg, 1002);

		$this->_id = $value;
		return true;
	}

	public function getID () :int {

		return (int) $this->_id;
	}

	public function setLevel ($value) :bool {

		$match	= $this->getMatch("level");
		$msg	= $this->getMessage("level");
		if (!preg_match($match, $value))
			throw new StudentClassException($msg, 1002);

		$this->_level = $value;

		return true;
	}

	public function getLevel () :string {

		return (string) $this->_level;
	}

	public function setName ($value) :bool {

		$match	= $this->getMatch("name");
		$msg	= $this->getMessage("name");
		if (!preg_match($match, $value))
			throw new StudentClassException($msg, 1002);

		$this->_name = $value;

		return true;
	}

	public function getName () :string {

		return (string) $this->_name;
	}
}

?>
