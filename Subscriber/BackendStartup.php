<?php

namespace Shopware\DsnDisableBackButton\Subscriber;

class BackendStartup implements \Enlight\Event\SubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'Enlight_Controller_Action_PostDispatchSecure_Backend_Index' => 'onBackendPostDispatch'
        );
    }

    public function onBackendPostDispatch(\Enlight_Event_EventArgs $args)
    {
        /** @var $controller \Enlight_Controller_Action */
        $controller = $args->getSubject();
        $view = $controller->View();

        if ($controller->Request()->getActionName() !== 'load') {
            return;
        }

        $view->addTemplateDir(__DIR__ . '/../Views/');
        $view->extendsTemplate('backend/swag_disable_back_button/menu.js');

    }
}