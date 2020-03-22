<?php

/*
 * Contao CalendarExtended Bundle
 * @copyright  Copyright (c) 2018-2020, reluem
 * @author     reluem
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/reluem/contao-calendar-extended
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
            $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
            $loader->load('services.yml');
        }
    }
