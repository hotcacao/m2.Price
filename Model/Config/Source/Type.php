<?php
/**
 * Faonni
 *  
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade module to newer
 * versions in the future.
 * 
 * @package     Faonni_Price
 * @copyright   Copyright (c) 2017 Karliuka Vitalii(karliuka.vitalii@gmail.com) 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Faonni\Price\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use Faonni\Price\Model\Plugin\Currency;

/**
 * Source of option values in a form of value-label pairs
 */
class Type implements ArrayInterface
{
    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
			['value' => Currency::TYPE_CEIL,  'label' => __('Round fractions up')],
			['value' => Currency::TYPE_FLOOR, 'label' => __('Round fractions down')],
			['value' => Currency::TYPE_SWEDISH_CEIL,  'label' => __('Swedish Round up')],
			['value' => Currency::TYPE_SWEDISH_ROUND, 'label' => __('Swedish Round')],
			['value' => Currency::TYPE_SWEDISH_FLOOR, 'label' => __('Swedish Round down')]			
		];
    }
}
