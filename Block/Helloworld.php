<?php
/**
 * Copyright © Magefactory (https://magefactory.alexander-naumov.com)
 * Author: Alexander Naumov
 * See LICENSE for the license details.
 */

namespace Magefactory\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function helloWorld() {
        return 'Hello World';
    }
}
