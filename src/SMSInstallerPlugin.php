<?php

namespace SMS\Composer\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class PreflightInstaller.
 */
class SMSInstallerPlugin extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        $targetDir = $package->getPrettyName();

        return 'src/Module/'.($targetDir ? '/'.$targetDir : '');
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return ('sms-module' === $packageType);
    }
}
