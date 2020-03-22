<?php
    /**
     * Contao Open Source CMS
     *
     * Copyright (c) 2005-2020 Leo Feyer
     *
     * @author    reluem
     * @license   GNU/LGPL
     * @copyright reluem 2020
     */
    
    namespace reluem\ContaoCalendarExtendedBundle\DependencyInjection;
    
    use Symfony\Component\Config\FileLocator;
    use Symfony\Component\DependencyInjection\ContainerBuilder;
    use Symfony\Component\DependencyInjection\Extension\Extension;
    use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
    
    class ContaoCalendarExtendedExtension extends Extension
    {
        public function load(array $configs, ContainerBuilder $container): void
        {
            $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
            $loader->load('services.yml');
        }
    }