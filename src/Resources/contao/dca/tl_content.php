<?php
    /**
     *
     *  Extended DCA Integration
     *
     **/
    
    $GLOBALS['TL_DCA']['tl_content']['palettes']['timetable'] = 'name,type,headline;{timetable_legend},timetable;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
    
    /**
     * Fields
     */
    
    $GLOBALS['TL_DCA']['tl_content']['fields']['timetable'] = [
        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable'],
        'exclude' => true,
        'inputType' => 'multiColumnWizard',
        'eval' => [
            'class' => 'w100',
            'columnFields' =>
                [
                    'timetable_date' =>
                        [
                            'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_date'],
                            'exclude' => true,
                            'inputType' => 'text',
                            'eval' => [
                                'rgxp' => 'date',
                                'datepicker' => true,
                                'tl_class' => 'w50 wizard',
                                'style' => 'width: 70%',

                            ],
                        ],
                    'timetable_times' => [
                        
                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_times'],
                        'inputType' => 'multiColumnWizard',
                        'eval' => [
                            'columnFields' => [
                                'timetable_start' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_start'],
                                        'required' => true,
                                        'exclude' => true,
                                        'inputType' => 'text',
                                        'eval' => [
                                            'rgxp' => 'time',
                                            'datepicker' => true,
                                            'tl_class' => 'w50 wizard',
                                            'style' => 'width: 70%',
                                            'valign' => 'top',
                                        ],
                                    
                                    ],
                                'timetable_end' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_end'],
                                        'exclude' => true,
                                        'inputType' => 'text',
                                        'eval' => [
                                            'rgxp' => 'time',
                                            'datepicker' => true,
                                            'tl_class' => 'w50 wizard',
                                            'style' => 'width: 70%',
                                            'valign' => 'top',
                                        
                                        ],
                                    
                                    ],
                                'timetable_desc' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_desc'],
                                        'exclude' => true,
                                        'inputType' => 'textarea',
                                        'eval' => [
                                            'style' => 'width:150px',
                                        ],
                                    
                                    ],
                                'timetable_loc' =>
                                    [
                                        'label' => &$GLOBALS['TL_LANG']['tl_content']['timetable_loc'],
                                        'exclude' => true,
                                        'inputType' => 'text',
                                        'eval' => [
                                            'valign' => 'top',
                                            'style' => 'width: 100px',
                                        ],
                                    ],
                            ],
                        
                        ],
                    ],
                
                ],
        ],
        
        
        'sql' => 'blob NULL',
    ];