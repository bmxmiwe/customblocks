<?php

namespace Berlingske\CustomBlocks\Block;
use Magento\Framework\View\Element\Template;

class FooterBlock extends Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
}
