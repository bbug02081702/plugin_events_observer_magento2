<?php
 
namespace IchiiSoft\Training\Block;
 
use Magento\Framework\View\Element\Template;
 
class BlockPost extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
 
    public function getTitle()
    {
        return __('HelloWorld!');
    }
}