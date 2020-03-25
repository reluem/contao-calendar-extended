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
     * Front end content element "ce_prices".
     *
     * @author Leo Feyer <https://github.com/leofeyer>
     */
    class prices extends ContentElement
    {
        /**
         * Template.
         *
         * @var string
         */
        protected $strTemplate = 'ce_prices';

        /**
         * Compile the content element.
         */
        protected function compile()
        {
            $arr = deserialize($this->prices);
            $prices = [];

            foreach ($arr as $element) {
                $prices[$element['price_type']][] = $element;
            }

            ksort($prices, SORT_NUMERIC);

            $this->Template->prices = $prices;
        }
    }
