<?php

	/**
	 * The Hello World class!
	 *
	 * @author Michiel Rook
	 * @version $Id$
	 * @package hello.world
	 */
	class HelloWorld
	{
		public function foo($silent = true)
		{
			if ($silent) {
				return;
			}
			return 'foo';
		}

		function sayHello()
		{
			return "Hello World!";
		}
		/**
		 * return the version
		 */		
		public function _getVersion() {
			return "0.1";
		}
	};

?>
