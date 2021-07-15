<?php

class CalculCoutValidationModuleFrontController extends ModuleFrontController{


    public function initContent()
 {
        parent::initContent();
        $this->context->smarty->assign(array(
        'hello' => 'Hello World!!!',
        ));
        $this->setTemplate('validation.tpl');
 }



}