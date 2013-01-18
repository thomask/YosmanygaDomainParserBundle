<?php

namespace Yosmanyga\Bundle\DomainParserBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class YosmanygaDomainParserExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $container->setAlias('domain_parser', 'yosmanyga_domain_parser.domain_parser');

        $container->setParameter('yosmanyga_domain_parser.list_path', __DIR__.'/../Resources/public-suffix-list.php');
    }

    public function getAlias()
    {
        return 'yosmanyga_domain_parser';
    }
}
