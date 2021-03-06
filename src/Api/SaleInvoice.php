<?php

/**
 * Part of Dear package.
 *
 * @package Dear
 * @version 1.0
 * @author Umair Mahmood
 * @license MIT
 * @copyright Copyright (c) 2019 Umair Mahmood
 *
 */

namespace UmiMood\Dear\Api;

use UmiMood\Dear\Api\Contracts\DeleteMethodAllowed as DeleteContract;
use UmiMood\Dear\Api\Contracts\PostMethodAllowed as PostContract;

class SaleInvoice extends BaseApi implements PostContract, DeleteContract
{
    protected function getGUID()
    {
        return "SaleID";
    }

    protected function getAction()
    {
        return 'sale/invoice';
    }
}