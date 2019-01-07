<?php
    
    Controller::loadDataContainer('tl_content');
    
    
    /**
     *
     * Calendar Extended DCA Integration
     *
     **/
    
    \Contao\CoreBundle\DataContainer\PaletteManipulator::create()
        ->addLegend('video_legend', 'recurring_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
        ->addLegend('text_legend', 'image_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)
        ->addLegend('signup_legend', 'recurring_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
        ->addField('addVideo', 'video_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
        ->addField('text', 'text_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
        ->addField(array('location_ID', 'FB_event_URL'),
            'location',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
        ->addField(array('signupUrl', 'signupLabel', 'signupStart', 'signupEnd'), 'signup_legend',
            \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
        ->addField('subtitle', 'title', \Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
        ->applyToPalette('default', 'tl_calendar_events');
    
    
    /**
     * Fields
     */
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['addVideo'] = 'videoUrl';
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'addVideo';
    
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['location_ID'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['location_ID'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'text',
        'eval' => array('maxlength' => 255, 'tl_class' => 'w50'),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['FB_event_URL'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['FB_event_URL'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => array('maxlength' => 255, 'tl_class' => 'w50'),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['subtitle'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['subtitle'],
        'exclude' => true,
        'search' => true,
        'sorting' => true,
        'flag' => 1,
        'inputType' => 'text',
        'eval' => array('maxlength' => 255, 'tl_class' => 'clr w50'),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['text'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['text'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'textarea',
        'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
        'sql' => "text NULL",
    );
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['addVideo'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['addVideo'],
        'exclude' => true,
        'inputType' => 'checkbox',
        'eval' => array('submitOnChange' => true),
        'sql' => "char(1) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['videoUrl'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['videoUrl'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'text',
        'eval' => array(
            'rgxp' => 'url',
            'decodeEntities' => true,
            'maxlength' => 255,
            'fieldType' => 'radio',
            'filesOnly' => true,
            'tl_class' => 'w50 wizard',
        ),
        'wizard' => array(
            array('tl_content', 'pagePicker'),
        ),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupUrl'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupUrl'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'text',
        'eval' => array(
            'mandatory' => true,
            'rgxp' => 'url',
            'decodeEntities' => true,
            'maxlength' => 255,
            'dcaPicker' => true,
            'addWizardClass' => false,
            'tl_class' => 'w50',
        ),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupLabel'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupLabel'],
        'exclude' => true,
        'search' => true,
        'sorting' => true,
        'flag' => 1,
        'inputType' => 'select',
        'options' => array('Jetzt anmelden', 'Karten bestellen'),
        'eval' => array('maxlength' => 255, 'includeBlankOption' => false, 'tl_class' => 'w50 wizard'),
        'sql' => "varchar(255) NOT NULL default ''",
    );
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupStart'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupStart'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => array('mandatory' => true, 'rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'clr w50 wizard'),
        'sql' => "varchar(10) NOT NULL default ''",
    );
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupEnd'] = array
    (
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupEnd'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => array('mandatory' => true, 'rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'),
        'sql' => "varchar(10) NOT NULL default ''",
    );