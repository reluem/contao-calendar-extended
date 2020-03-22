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
    
    namespace reluem\ContaoCalendarExtendedBundle\Tests;
    
    use reluem\ContaoCalendarExtendedBundle\ContaoCalendarExtendedBundle;
    use PHPUnit\Framework\TestCase;
    
    class ContaoCalendarExtendedBundleTest extends TestCase
    {
        public function testCanBeInstantiated()
        {
            $bundle = new ContaoCalendarExtendedBundle();
            
            $this->assertInstanceOf('reluem\ContaoCalendarExtendedBudlde\ContaoCalendarExtendedBundle', $bundle);
        }
    }