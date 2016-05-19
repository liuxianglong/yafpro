<?php
class exception_base extends Exception {
	public function __construct($message, $code){
		parent::__construct($message,$code);
	}

	public function __toString(){
		return get_class($this).":[{$this->code}]:{$this->message}";
	}
}
