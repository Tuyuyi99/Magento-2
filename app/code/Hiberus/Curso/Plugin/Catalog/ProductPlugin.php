<?php

namespace Hiberus\Curso\Plugin\Catalog;

class ProductPlugin {

    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
        $result = "Prueba de plugin";
        return $result;
    }

}
