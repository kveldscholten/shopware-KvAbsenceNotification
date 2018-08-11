<?php

namespace KvAbsenceNotification;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;

class KvAbsenceNotification extends Plugin
{
    public function install(InstallContext $installContext)
    {

    }

    public function uninstall(UninstallContext $uninstallContext)
    {
        // If the user wants to keep his data we will not delete it while uninstalling the plugin
        if ($uninstallContext->keepUserData()) {
            return;
        }

        // clear cache
        $uninstallContext->scheduleClearCache(UninstallContext::CACHE_LIST_ALL);
    }

    public function activate(ActivateContext $activateContext)
    {
        // on plugin activation clear the cache
        $activateContext->scheduleClearCache(ActivateContext::CACHE_LIST_ALL);
    }

    public function deactivate(DeactivateContext $deactivateContext)
    {
        // on plugin deactivation clear the cache
        $deactivateContext->scheduleClearCache(DeactivateContext::CACHE_LIST_ALL);
    }
}