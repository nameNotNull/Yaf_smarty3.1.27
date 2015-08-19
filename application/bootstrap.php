<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {
    public function _initConfig() {
        $arrConfig = Yaf_Application::app()->getConfig(); //把配置保存起来
        Yaf_Registry::set('config', $arrConfig);
    }
    public function _initSmarty(Yaf_Dispatcher $dispatcher) {  
        $smarty = new Smarty_Adapter(null, Yaf_Application::app()->getConfig()->smarty);  
        Yaf_Dispatcher::getInstance()->setView($smarty);  
    }  
}
?>

