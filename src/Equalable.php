<?php
	namespace Stein197;

	/**
	 * This interface should be implemented by classes which instances are supposed to be compared/
	 * @package Stein197
	 */
	interface Equalable {

		/**
		 * Compares the current object and another one.
		 * @param mixed $o Object to compare with.
		 * @return bool `true` if objects are equal.
		 */
		public function equals($o): bool;
	}
