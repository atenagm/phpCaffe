<?php

class Products
{
    public static function getProductsList($store)
    {
        return $xml = new SimpleXMLElement(file_get_contents($store));
    }
}
