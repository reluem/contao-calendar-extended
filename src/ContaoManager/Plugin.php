<?php
    
    namespace reluem\ContaoCalendarExtendedBundle\ContaoManager;
    
    
    use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
    use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
    use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
    use Contao\CalendarBundle\ContaoCalendarBundle;
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