<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\DependencyInjection;

use Sylius\Bundle\ResourceBundle\DependencyInjection\Extension\AbstractResourceExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

final class SetonoSyliusShippingRequirementsExtension extends AbstractResourceExtension
{
    /**
     * @inheritdoc
     * @throws \Exception
     */
    public function load(array $config, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $this->registerResources('setono_sylius_shipping_requirements', $config['driver'], $config['resources'], $container);

        $loader->load('services.xml');
    }
}
