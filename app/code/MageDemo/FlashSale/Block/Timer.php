<?php
namespace MageDemo\FlashSale\Block;

use Magento\Catalog\Block\Product\View;

class Timer extends View
{
    public function getTimer() {
        return "Timer text value here";
    }
}