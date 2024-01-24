<?php
namespace MageDemo\FlashSale\Block;

use Magento\Catalog\Block\Product\View;

class Timer extends View
{
    public function getString() {
        return "This is sample value from the module here";
    }
}