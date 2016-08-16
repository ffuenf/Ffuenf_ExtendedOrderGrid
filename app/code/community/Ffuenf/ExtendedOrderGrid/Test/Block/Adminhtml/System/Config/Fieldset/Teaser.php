<?php
/**
 * Ffuenf_ExtendedOrderGrid extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_ExtendedOrderGrid_Test_Block_Adminhtml_System_Config_Fieldset_Teaser extends EcomDev_PHPUnit_Test_Case_Config
{

    /**
     * Check if the block aliases are returning the correct class names
     *
     * @test
     */
    public function testBlockAliases()
    {
        $this->assertBlockAlias(
            'ffuenf_extendedordergrid/adminhtml_system_config_fieldset_teaser',
            'Ffuenf_ExtendedOrderGrid_Block_Adminhtml_System_Config_Fieldset_Teaser'
        );
    }
}
