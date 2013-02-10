<?php
class FBIgnitedException extends Exception {

	public function __construct($message, $code = 0, Exception $previous = null, $error_log = true) {
		// make sure everything is assigned properly
		if ($error_log === true) {
			error_log("FBIgnitedException: ".$message);
		}
		parent::__construct($message, $code, $previous);
	}

	// custom string representation of object
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}

}
