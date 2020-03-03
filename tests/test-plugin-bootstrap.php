<?php
/**
 * Class SampleTest
 *
 * @package Wp_menu_stylish
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
         * @test Plugin Can Instantiate
         */
	public function testPluginCanInstantiate() {
		// Replace this with some actual testing code.
                $this->assertFileExists('wp_menu_stylish.php');
	}
        
        public function testMenuStylishPluginHasVersionDefined(){
            
        }
        
        
}
