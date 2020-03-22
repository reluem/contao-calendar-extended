<?php

/*
 * Contao CalendarExtended Bundle
 * @copyright  Copyright (c) 2018-2020, reluem
 * @author     reluem
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/reluem/contao-calendar-extended
 */

namespace reluem\ContaoCalendarExtendedBundle\Tests;

    use PHPUnit\Framework\TestCase;
    use reluem\ContaoCalendarExtendedBundle\ContaoCalendarExtendedBundle;

    class ContaoCalendarExtendedBundleTest extends TestCase
    {
        public function testCanBeInstantiated()
        {
            $bundle = new ContaoCalendarExtendedBundle();

            $this->assertInstanceOf('reluem\ContaoCalendarExtendedBudlde\ContaoCalendarExtendedBundle', $bundle);
        }
    }
