<?php

namespace Yosmanyga\Bundle\DomainParserBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RefreshListCommand extends ContainerAwareCommand
{
    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setName('yosmanyga:domain-parser:refresh-list')
            ->setDescription('Refresh Public Suffix List and save it to Resources/public-suffix-list.php')
            ->setHelp(<<<EOT
The <info>yosmanyga:domain-parser:refresh-list</info> command refresh the Public Suffix List and save it to Resources/public-suffix-list.php
EOT
            );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manager = new \Pdp\PublicSuffixListManager(__DIR__.'/../Resources/');
        $manager->refreshPublicSuffixList();
    }
}
