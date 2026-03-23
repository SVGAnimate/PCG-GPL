<?php
/**
 * @domain Developpement
 * @category Accounting
 */
namespace Ingestion\Services\PCG\Model;

/**
 * Reglement de type Revision, consolidation, release ?
 */
class Account {
	public $code = "";
	public $label = "";
	//public $systeme = "";
	public \ArrayObject $accounts;

	public function __construct(string $code, string $label, ?\ArrayObject $accounts = Null) {
		$this->code = $code;
		$this->label = $label;
		$this->accounts = $accounts ? $accounts : new \ArrayObject();
	}
	public function getLevel() {
		return strlen($this->code);
	}
}
