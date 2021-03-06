<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Order\Factory;

use Sylius\Bundle\OrderBundle\Controller\AddToCartCommandInterface;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Model\OrderItemInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
interface AddToCartCommandFactoryInterface
{
    /**
     * @param OrderInterface $cart
     * @param OrderItemInterface $cartItem
     *
     * @return AddToCartCommandInterface
     */
    public function createWithCartAndCartItem(OrderInterface $cart, OrderItemInterface $cartItem);
}
