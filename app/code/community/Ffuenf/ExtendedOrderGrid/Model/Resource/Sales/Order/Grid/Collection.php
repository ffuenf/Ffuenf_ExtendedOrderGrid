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

class Ffuenf_ExtendedOrderGrid_Model_Resource_Sales_Order_Grid_Collection extends Mage_Sales_Model_Resource_Order_Grid_Collection
{

    /**
     * Init select
     * @return Mage_Core_Model_Resource_Db_Collection_Abstract
     */
    protected function _initSelect()
    {
        $this->addFilterToMap('store_id', 'main_table.store_id')
             ->addFilterToMap('created_at', 'main_table.created_at')
             ->addFilterToMap('updated_at', 'main_table.updated_at');
        return parent::_initSelect();
    }
}
