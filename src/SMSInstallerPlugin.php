<?php

namespace SMS\Composer\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class SMSInstallerPlugin
 */
class SMSInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new SMSInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}