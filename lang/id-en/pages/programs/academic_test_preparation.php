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
    'meta_title' => "Study Abroad Test Preparation Program - EduAll",
    'meta_description' => 'Intensive program to help students take university entrance exams abroad. Pick your class and book your Free Trial now!',

    "navbar_title" => "EduALL Academy",

    "benefits" => [
        [
            'title' => "Personalized",
            'tag' => "Learning Path",
            'image' => "benefit-01.png",
        ],
        [
            'title' => "Expert Tutor",
            'tag' => "Qualifications",
            'image' => "benefit-02.png",
        ],
        [
            'title' => "Diverse Subject",
            'tag' => "Expertise",
            'image' => "benefit-03.png",
        ],
        [
            'title' => "On-Demand",
            'tag' => "Schedule",
            'image' => "benefit-04.png",
        ]
    ],

    // banner section
    "title" => "YOUR PATH TO <br> TOP SCORES",
    "body" => "Subject Tutoring, SAT & <br> Olympiad Prep Class",
    "our_program_title" => "YOUR JOURNEY TO SUCCESS",
    "our_program_data" => $our_programs,

    "program_title" => "Choose Your Preparation",
    "program_list" => [
        [
            "title" => "Subject Tutoring",
            "desc" => "Online | Private Class <br> Grade 7-11",
            'image' => "Buku.png",
            "points" => [
                "Curriculum: IB, Cambridge, AP, National Plus, National"
            ],
            'link' => 'subject',
        ],
        [
            "title" => "SAT Prep Class",
            "desc" => "Online | Private & Semi Private Class <br> Grade 7-11",
            'image' => "Menulis.png",
            "points" => [
                "SAT Math, SAT English (Reading & Writing)"
            ],
            'link' => 'sat',
        ],
        [
            "title" => "Olympiad Prep Class",
            "desc" => "Online | Semi Private Class <br> Grade 7-11",
            'image' => "Piala.png",
            "points" => [
                "Math, Physics, Science, Coding (SASMO, AMO, SEAMO, SIMOC, VANDA, etc)"
            ],
            'link' => 'olympiad',
        ],
    ],

    'get_to_know_more' => "Get to Know More",
    'learn_more' => "Learn More",
    "lets_start" => "Let’s Start",


    "testimony_title" => "Why EduALL Academy",
    "achievement_title" => "Our Students Achievement",
    "result_title" => "Our Students' Results",
    "result_description" => "Top Universities Demand More: Academic Excellence, Olympiad Wins & Superior Test Scores",
    "result_more" => "..... and many more",
    "tutor_title" => "Meet Our Tutors",
];
