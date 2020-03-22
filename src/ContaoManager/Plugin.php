<?php

/*
 * Contao CalendarExtended Bundle
 * @copyright  Copyright (c) 2018-2020, reluem
 * @author     reluem
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/reluem/contao-calendar-extended
 */

namespace reluem\ContaoCalendarExtendedBundle\ContaoManager;

    use Contao\CalendarBundle\ContaoCalendarBundle;
    use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
    use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
    use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
    use reluem\ContaoCalendarExtendedBundle\ContaoCalendarExtendedBundle;

    class Plugin implements BundlePluginInterface
    {
        public function getBundles(ParserInterface $parser): array
        {
            return [
                BundleConfig::create(ContaoCalendarExtendedBundle::class)
                    ->setLoadAfter([ContaoCalendarBundle::class]),
            ];
        }
    }
