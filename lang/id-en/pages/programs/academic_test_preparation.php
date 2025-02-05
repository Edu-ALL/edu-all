<?php

$our_programs = [
    [
        'title' => "Maximize Your Academic Scores",
        'description' => "Elevate your scores and unlock doors to prestigious universities with our academic tutoring, covering a variety of subjects.",
        'button' => "Improve Your Scores Now"
    ],
    [
        'title' => "Achieve Top Standardized Test Scores",
        'description' => "Master common standardized tests such as SAT and English Proficiency Tests such as TOEFL/IELTS with our proven tutoring class.",
        'button' => "Start Preparing Now"
    ],
    [
        'title' => "Reach Your Highest Potential",
        'description' => [
            [
                "title" => "Algorithm & Programming",
                "description" => "Make a mark on your university applications with specialized tutoring in algorithms and programming.",
            ],
            [
                "title" => "Subject Olympiad Preparation ",
                "description" => "Impress the world’s top universities by excelling in STEM-focused subjects such as Math and Biology Olympiads with our special olympiad prep. ",
            ],
            [
                "title" => "English <br/> Writing ",
                "description" => "Hone your essay and academic writing skills with our English writing program, designed for university success.",
            ],
        ],
        'button' => "Discover More Tutoring Programs"
    ],
    [
        'title' => "Finally, Secure Your Spot at a Top University!",
        'button' => "Start Your Journey Here",
    ]
];

return [
    'meta_title' => "Academic & Test Preparation for your top university application success",
    'meta_description' => 'Discover our proven approach to enhance your academic transcript and maximize test scores for elite university admissions.',

    "navbar_title" => "Academic & Test Prep",

    "benefits" => [
        [
            'title' => "Personalized",
            'tag' => "Learning Path",
            'image'=> "benefit-01.png",
        ],
        [
            'title' => "Expert Tutor",
            'tag' => "Qualifications",
            'image'=> "benefit-02.png",
        ],
        [
            'title' => "Diverse Subject",
            'tag' => "Expertise",
            'image'=> "benefit-03.png",
        ],
        [
            'title' => "On-Demand",
            'tag' => "Schedule",
            'image'=> "benefit-04.png",
        ]
    ],

    // banner section
    "title" => "Academic & Test Preparation",
    "body" => "Discover our proven approach to enhance your academic transcript and maximize test scores for elite university admissions.",
    "our_program_title" => "YOUR JOURNEY TO SUCCESS",
    "our_program_data" => $our_programs,

    "program_title" => "Choose Your Preparation",
    "program_list" => [
        [
            "title" => "Academic <br/> Tutoring",
            "desc" => "With core concept mastery and internationally qualified tutors, we prepare students with robust academic knowledge, enhanced problem-solving skills, and sharpened critical thinking abilities.",
            'image' => "Academic tutoring.webp",
            "points" => [
                "IBDP",
                "IB MYP",
                "Cambridge A-Level",
                "Cambridge IGCSE",
                "Advanced Placement",
            ],
            'link' => 'academic-tutoring',
        ],
        [
            "title" => "Standardized Test Preparation",
            "desc" => "Excel in SAT, IELTS, and TOEFL with our expert personalized tutoring, unlocking global academic opportunities through comprehensive preparation strategies.",
            'image' => "standardized test.webp",
            "points" => [
                "SAT",
                "TOEFL",
                "IELTS",
            ],
            'link' => 'sat-program',
        ],
        [
            "title" => "Skillset <br/> Tutoring",
            "desc" => "Elevate your unique passions through personalized skillset tutoring that focuses on the needs of every student. This is designed to elevate students’ academic profile, making their university application stand out.",
            'image' => "skillset tutoring.webp",
            "points" => [
                "Algorithm & Programming",
                "Subject Olympiad Preparation",
                "English Writing Mastery",
            ],
            'link' => 'skillset-tutoring-program',
        ],
        // [
        //     "title" => "IB Extended Essay Coaching",
        //     "desc" => "Drill your Extended Essay writing process in 3 months with our holistic approach!",
        //     'image' => "IB essay.webp",
        //     'link' => 'skillset-tutoring-program',
        // ],
    ],

    'learn_more' => "Learn More",
    "lets_start" => "Let’s Start",

    // academic tutoring section
    "academic_tutoring_title" => "Academic Tutoring",
    "academic_tutoring_description" => "With <span class='text-newprimary'>core concept mastery </span> and <span class='text-newprimary'>internationally qualified tutors,</span> we prepare students with robust academic knowledge, enhanced problem-solving skills, and sharpened critical thinking abilities.",
    "academic_tutoring_special_formula_title" => "Our Special Formula",
    "academic_tutoring_special_formula" => [
        'Personalized tutoring, based on the student’s ability',
        '2-way student-tutor interaction with fun and relaxing vibes',
        'Kickstarting major exploration',
        'Entrance exam preparation with a wide variety of textbooks, question banks, and complete past papers.',
        'Student-tutor and parent report to monitor and develop the student\'s progress',
    ],
    "academic_tutoring_special_formula_button" => "Learn More",


    // IB EXTENDED ESSAY COACHING PROGRAM Section
    "ib_extended_title" => "IB EXTENDED ESSAY COACHING PROGRAM",
    "ib_extended_description" => "Drill your Extended Essay writing process in 3 months with our holistic approach!",
    "ib_extended_topic_title" => "TOPICS COVERED",
    "ib_extended_button" => "Learn More",

    // Standardized Test Preparation
    "standardized_test_preparation_title" => "STANDARDIZED TEST PREPARATION",
    "standardized_test_preparation_description" => "Excel in SAT, IELTS, and TOEFL with our expert personalized tutoring, unlocking global academic opportunities through comprehensive preparation strategies.",
    "standardized_test_preparation_button" => "Learn More",

    // Skillset Tutoring
    "skillset_tutoring_title" => "SKILLSET TUTORING",
    "skillset_tutoring_description" => "Elevate your unique passions through personalized skillset tutoring that focuses on the needs of every student. This is designed to elevate students’ academic profile, making their university application stand out.",
    "skillset_tutoring_button" => "Learn More",

    // Testimoial
    "testimony_title" => "WHAT OUR STUDENT SAY",
];
