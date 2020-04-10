<?php
    
    use Contao\CoreBundle\DataContainer\PaletteManipulator;
    
    Controller::loadDataContainer('tl_content');
    
    /**
     *
     * Calendar Extended DCA Integration
     *
     **/
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'addJSONLD';
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'addVideo';
    $GLOBALS['TL_DCA']['tl_calendar_events']['palettes']['__selector__'][] = 'addSignup';
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['addJSONLD'] = 'jsonLD';
    $GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['addVideo'] = 'videoUrl';
    $GLOBALS['TL_DCA']['tl_calendar_events']['subpalettes']['addSignup'] = 'signupUrl,signupLabel, signupStart, signupEnd';
    
    
    PaletteManipulator::create()
        ->addLegend('video_legend', 'image_legend')
        ->addField('addVideo', 'video_legend', PaletteManipulator::POSITION_APPEND)
        ->addLegend('signup_legend', 'recurring_legend')
        ->addField('addSignup', 'signup_legend', PaletteManipulator::POSITION_APPEND)
        ->addField('addJSONLD', 'meta_legend',
            PaletteManipulator::POSITION_APPEND)
        ->addField(['coordinates', 'FB_event_URL'],
            'location')
        ->applyToPalette('default', 'tl_calendar_events');
    
    /**
     * Fields
     */
    
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['addJSONLD'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['addJSONLD'],
        'exclude' => true,
        'inputType' => 'checkbox',
        'eval' => ['submitOnChange' => true],
        'sql' => "char(1) NOT NULL default ''",
    ];
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['jsonLD'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['jsonLD'],
        'inputType' => 'jsonWidget',
        'eval' => [
            'tl_style' => 'long',
            'decodeEntities' => true,
            'allowHtml' => true,
            'rte' => 'ace|yaml',
        ],
        'sql' => 'blob NULL',
    ];
    
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['coordinates'] = [
        'label' => ['Koordinaten', 'Geben Sie die Koordinaten ein'],
        'inputType' => 'leaflet_geocode',
        'eval' => [
            'tl_class' => 'w50',
        ],
        'sql' => 'varchar(255) NOT NULL default \'\'',
    ];
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['FB_event_URL'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['FB_event_URL'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => ['maxlength' => 255, 'tl_class' => 'w50'],
        'sql' => "varchar(255) NOT NULL default ''",
    ];
    
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['addVideo'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['addVideo'],
        'exclude' => true,
        'inputType' => 'checkbox',
        'eval' => ['submitOnChange' => true],
        'sql' => "char(1) NOT NULL default ''",
    ];
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['videoUrl'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['videoUrl'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'text',
        'eval' => [
            'rgxp' => 'url',
            'decodeEntities' => true,
            'maxlength' => 255,
            'fieldType' => 'radio',
            'filesOnly' => true,
            'tl_class' => 'w50 wizard',
        ],
        'wizard' => [
            ['tl_content', 'pagePicker'],
        ],
        'sql' => "varchar(255) NOT NULL default ''",
    ];
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['addSignup'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['addSignup'],
        'exclude' => true,
        'inputType' => 'checkbox',
        'eval' => ['submitOnChange' => true],
        'sql' => "char(1) NOT NULL default ''",
    ];
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupUrl'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupUrl'],
        'exclude' => true,
        'search' => true,
        'inputType' => 'text',
        'eval' => [
            'mandatory' => true,
            'rgxp' => 'url',
            'decodeEntities' => true,
            'maxlength' => 255,
            'dcaPicker' => true,
            'addWizardClass' => false,
            'tl_class' => 'w50',
        ],
        'sql' => "varchar(255) NOT NULL default ''",
    ];
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupLabel'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupLabel'],
        'exclude' => true,
        'search' => true,
        'sorting' => true,
        'flag' => 1,
        'inputType' => 'select',
        'options' => ['Jetzt anmelden', 'Karten bestellen'],
        'eval' => ['maxlength' => 255, 'includeBlankOption' => false, 'tl_class' => 'w50 wizard'],
        'sql' => "varchar(255) NOT NULL default ''",
    ];
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupStart'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupStart'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => ['mandatory' => true, 'rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'clr w50 wizard'],
        'sql' => "varchar(10) NOT NULL default ''",
    ];
    
    $GLOBALS['TL_DCA']['tl_calendar_events']['fields']['signupEnd'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_calendar_events']['signupEnd'],
        'exclude' => true,
        'inputType' => 'text',
        'eval' => ['mandatory' => true, 'rgxp' => 'datim', 'datepicker' => true, 'tl_class' => 'w50 wizard'],
        'sql' => "varchar(10) NOT NULL default ''",
    ];