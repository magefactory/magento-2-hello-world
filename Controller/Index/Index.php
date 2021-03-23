<?php

/**
 * Copyright © Magefactory (https://magefactory.alexander-naumov.com)
 * Author: Alexander Naumov
 * See LICENSE for the license details.
 */

namespace Magefactory\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends  Action
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}