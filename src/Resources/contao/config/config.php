<?php
    
    
    /** Front end modules */
    $GLOBALS['FE_MOD']['events']['navbarSignup'] = \reluem\ContaoCalendarExtendedBundle\FrontendModule\navbarSignup::class;
    
    /** CTE */
    $GLOBALS['TL_CTE']['miscellaneous']['timetable'] = \reluem\ContaoCalendarExtendedBundle\ContentElement\timetable::class;
    $GLOBALS['TL_CTE']['miscellaneous']['prices'] = \reluem\ContaoCalendarExtendedBundle\ContentElement\prices::class;

