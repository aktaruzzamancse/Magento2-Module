<?php
namespace Ns\Hello\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
        $this->setText('Hello World');
    }
}