<?php
/**
 * CLASS: Unit Tests for the CI PHP UNIT demonstration
 * 
 * @package default
 * @author Chad Miller <cmiller@redvel.net>
 * @link http://redvel.net
 * @since 11/28/11
 * 

 Copyright (c) 2011 Chad Miller.

 Permission is hereby granted, free of charge, to any person obtaining a copy of this 
 software and associated documentation files (the "Software"), to deal in the Software 
 without restriction, including without limitation the rights to use, copy, modify, 
 merge, publish, distribute, sublicense, and/or sell copies of the Software, and to 
 permit persons to whom the Software is furnished to do so, subject to the following 
 conditions:

 The above copyright notice and this permission notice shall be included in all 
 copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

 */

// prevent direct loading of this file
if ( basename(__FILE__) == basename($_SERVER['PHP_SELF']) ) { die("This file cannot be loaded directly."); }

class Test_Demo extends CI_TestCase {


	function setUp() {
		parent::setUp();
		// you'll want to add class members here. You can access the CI instance
		// object using $this->CI. You can test models, libraries, or helpers here.
	}

	function test_is_a_real_test() {
	
		// this demo test is set to not pass in order to deliberately
		// remind you to write your own tests.
		$is_a_real_test = 'No, this is not a real test.';
		$this->assertEquals( 'Yes, this is real.' , $is_a_real_test );

	}
}
