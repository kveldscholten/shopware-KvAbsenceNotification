<?php

namespace KvAbsenceNotification\Subscriber;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;

class Frontend implements SubscriberInterface
{
    private $pluginDirectory;

    private $config;

    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatch_Frontend' => 'onFrontend'
        ];
    }

    /**
     * Frontend constructor.
     *
     * @param $pluginName
     * @param $pluginDirectory
     * @param ConfigReader $configReader
     */
    public function __construct($pluginName, $pluginDirectory, ConfigReader $configReader)
    {
        $this->pluginDirectory = $pluginDirectory;
        $this->config = $configReader->getByPluginName($pluginName, Shopware()->Shop());
    }

    public function onFrontend(\Enlight_Event_EventArgs $args)
    {
        $subject = $args->getSubject();
        $view = $subject->View();
        $view->addTemplateDir($this->pluginDirectory . '/Resources/views');

        $from = $this->config['absenceNotificationFrom'];
        $to = $this->config['absenceNotificationTo'];
        $shipment = $this->config['absenceNotificationShipment'];
        $interval = $this->config['absenceNotificationInterval'];
        $description = $this->config['absenceNotificationDescription'];
        $search = ['%from%', '%to%', '%shipment%'];
        $replace = [date('d.m', strtotime($from)), date('d.m.Y', strtotime($to)), date('d.m.Y', strtotime($shipment))];

        if ($from && $to && $description && time() >= (strtotime($from) - $interval) && time() <= (strtotime($to) + (60*60*24))) {
            $view->assign('absenceNotificationStatus', true);
        }
        $view->assign('absenceNotificationFrom', $from);
        $view->assign('absenceNotificationTo', $to);
        $view->assign('absenceNotificationInterval', $interval);
        $view->assign('absenceNotificationDesc', str_replace($search, $replace, $description));
        $view->assign('absenceNotificationShipping', $shipment);
    }
}
