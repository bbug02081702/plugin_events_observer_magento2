<?php
namespace IchiiSoft\Training\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framwork\App\RequestInterface;
class CustomPrice implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //lay san pham khi them vao gio hang
        $item = $observer->getEvent()->getData('quote_item');
        $product = $observer->getEvent()->getData('product');
        //lay parent item neu ton tai
        $item = ($item->getParentItem() ? $item->getParentItem() : $item);
        //thiet lap price theo y thich
        $price = 50;
        $item->setCustomPrice($price);
        $item->setOriginalCustomPrice($price);
        $item->getProduct()->setIsSuperMode(true);

    }
}