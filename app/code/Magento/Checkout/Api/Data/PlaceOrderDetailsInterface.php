<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Checkout\Api\Data;

use Magento\Quote\Api\Data\TotalsInterface;

/**
 * Interface PlaceOrderDetailsInterface
 * @api
 */
interface PlaceOrderDetailsInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    public const ORDER_ID    = 'order_id';
    public const TOTALS      = 'totals';
    public const ERRORS      = 'errors';

    /**
     * Set order id
     *
     * @param int $orderId
     * @return $this
     */
    public function setOrderId(int $orderId): self;

    /**
     * Get order id
     *
     * @return int
     */
    public function getOrderId(): int;

    /**
     * Get errors in order place process
     *
     * @return array
     */
    public function getErrors(): array;

    /**
     * Add error of order place process
     *
     * @param string $error
     * @return $this
     */
    public function addError(string $error): self;

    /**
     * Get totals, but it may be null because is not needed to update totals on success
     *
     * @return \Magento\Quote\Api\Data\TotalsInterface|null
     */
    public function getTotals(): ?TotalsInterface;

    /**
     * Set totals
     *
     * @param TotalsInterface $totals
     * @return $this
     */
    public function setTotals($totals): self;
}
