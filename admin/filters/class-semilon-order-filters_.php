<?php

/*if (!SEMILON_ORDER_FILTERS_IS_ACTIVE)
    return;*/


if (!class_exists('Semilon_Order_Filters_Main')) {
    class Semilon_Order_Filters_Main
    {
        public $field = array();

        public function __construct($isActive)
        {
        }
    }
}

