<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\Condition;

interface IBracket extends \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\ICondition
{
    const OPERATOR_AND = 'and';
    const OPERATOR_OR = 'or';
    const OPERATOR_AND_NOT = 'and_not';

    /**
     * @param \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\ICondition $condition
     * @param string $operator \Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\Condition\IBracket::OPERATOR_*
     *
     * @return IBracket
     */
    public function addCondition(\Pimcore\Bundle\EcommerceFrameworkBundle\PricingManager\ICondition $condition, $operator);
}
