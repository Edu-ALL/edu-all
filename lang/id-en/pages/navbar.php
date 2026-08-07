<?php

return [
    'home' => [
        'link' => '',
        'title' => 'Home',
    ],

    'mentoring' => [
        'link' => '#',
        'title' => 'Admission Mentoring',
        'submenu' => [
            [
                'link' => "programs/admissions-mentoring/ultimate-mentoring",
                'title' => 'Ultimate Mentoring Package',
            ],
            [
                'link' => 'programs/admissions-mentoring/epb',
                'title' => 'Exploration & Profile Building',
            ],
        ],
    ],

    'academy' => [
        'link' => 'programs/tutoring',
        'title' => 'EduALL Academy',
        'submenu' => [
            [
                'link' => "programs/tutoring/subject",
                'title' => 'Subject Tutoring',
            ],
            [
                'link' => 'programs/tutoring/sat',
                'title' => 'SAT Prep',
            ],
            [
                'link' => 'programs/tutoring/olympiad',
                'title' => 'Olympiad Prep',
            ],
        ],
    ],

    'about' => [
        'link' => '#',
        'title' => 'About Us',
        'submenu' => [
            [
                'link' => 'about',
                'title' => 'Our Story',
            ],
            [
                'link' => 'about/our-team',
                'title' => 'Our Team',
            ],
            [
                'link' => 'about/partnership',
                'title' => 'Partnership',
            ],
            [
                'link' => 'about/careers',
                'title' => 'Career',
            ],
        ]
    ],

    'event' => [
        'link' => 'event',
        'title' => 'Event',
    ],

    // blog
    'blog' => [
        'link' => 'blog',
        'title' => 'Blog',
    ],

    'impact-project' => [
        'link' => 'impact-project',
        'title' => 'Impact Project',
    ],
];
