<?php

class Anton_Cart_Model_Observer
{
    public function addToCart()
    {
        $uenc = Mage::app()->getFrontController()->getRequest()->getParam('uenc');
        if ($uenc) {
            $url = Mage::helper('core')->urlDecode($uenc);
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            Mage::app()->getResponse()->sendResponse();
            exit;
        }
    }
}