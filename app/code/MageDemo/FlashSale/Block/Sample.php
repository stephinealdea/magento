<?php
namespace MageDemo\FlashSale\Block;

use Magento\Catalog\Block\Product\View;

class Sample extends View
{
    public function getSampleString() {
        return "This is sample value from the module here";
    }
}