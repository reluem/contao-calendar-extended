<?php
    
    use reluem\CalendarExtended\ReluemCalendarExtendedBundle;
    
    /** Front end modules */
    $GLOBALS['FE_MOD']['events']['navbarSignup'] = \Reluem\navbarSignup::class;
    
    /** CTE */
    $GLOBALS['TL_CTE']['text']['timetable'] = \Reluem\timetable::class;
