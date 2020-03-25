<?php

/*
 * Contao CalendarExtended Bundle
 * @copyright  Copyright (c) 2018-2020, reluem
 * @author     reluem
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://github.com/reluem/contao-calendar-extended
 */

namespace reluem\ContaoCalendarExtendedBundle\ContentElement;

    use Contao\ContentElement;

    /**
     * Front end content element "ce_timetable".
     *
     * @author Leo Feyer <https://github.com/leofeyer>
     */
    class timetable extends ContentElement
    {
        /**
         * Template.
         *
         * @var string
         */
        protected $strTemplate = 'ce_timetable';

        /**
         * Compile the content element.
         */
        protected function compile()
        {
            $arr = deserialize($this->timetable);
            $timetable = [];

            foreach ($arr as $element) {
                $timetable[$element['timetable_date']][] = $element;
            }

            ksort($timetable, SORT_NUMERIC);

            $this->Template->timetable = $timetable;
        }
    }
