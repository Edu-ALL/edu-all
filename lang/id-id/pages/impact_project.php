<?php

return [
    'meta_title' => 'Proyek & Riset Siswa | EduALL',
    'meta_description' => 'Jelajahi Proyek Impact EduALL: proyek passion, kreasi siswa, dan makalah penelitian, karya nyata yang dibangun, dipelajari, dan dimulai oleh siswa kami.',

    'banner' => [
        'title' => 'Proyek Impact',
        'description' => 'Setiap proyek dimulai dari sebuah ide. Ini adalah proyek-proyek passion, penelitian, prototipe, dan inisiatif yang diwujudkan oleh mentee EduALL.',
        'buttons' => [
            'passion_projects' => 'Proyek Passion',
            'student_research' => 'Riset Siswa',
        ],
    ],

    'passion_projects' => [
        'title' => 'Proyek Passion',
        'description' => 'Proyek-proyek yang digerakkan oleh siswa di mana minat pribadi diubah menjadi sesuatu yang nyata: produk, inovasi, brand, atau cause.',
        'filters' => [
            'all' => 'Semua',
            'stem' => 'STEM',
            'business' => 'Bisnis',
            'social_science' => 'Ilmu Sosial',
            'art' => 'Seni',
        ],
        'projects' => [
            [
                'id' => 1,
                'title' => 'UVinci',
                'category' => 'Kesehatan & Teknologi',
                'author' => 'Vincent O. Kelas 11',
                'image' => 'https://picsum.photos/800/400',
                'short' => 'Sanitizer UV otomatis yang menjaga gagas pintar bebas kuman.',
                'desc1' => 'Menyadari bahwa gagas pintar adalah permukaan yang sering disentuh, Vincent membangun UVinci: perangkat yang sensor geraknya memicu cahaya UV untuk menyanitasi gagas pintar secara otomatis tanpa bahan kimia keras.',
                'desc2' => 'Ini menawarkan cara yang cepat dan bebas bahan kimia untuk mengurangi transmisi virus dan bakteri di ruang-ruang sehari-hari.',
            ],
            [
                'id' => 2,
                'title' => 'Temuhara',
                'category' => 'Bisnis',
                'author' => 'Didirikan oleh Unaisa',
                'image' => 'https://picsum.photos/801/400',
                'short' => 'Brand skincare dan bodycare yang berakar pada tradisi herbal Indonesia.',
                'desc1' => 'Temuhara mengubah tanaman asli Indonesia menjadi produk-produk lembut dan efektif seperti lip balm dan body butter.',
                'desc2' => 'Ini menghubungkan kembali orang dengan kesejahteraan alami dan merayakan warisan botanis Indonesia.',
            ],
            [
                'id' => 3,
                'title' => 'Aqua Vision',
                'category' => 'Sains & Teknologi',
                'author' => 'Dibuat oleh Evan',
                'image' => 'https://picsum.photos/802/400',
                'short' => 'Alat machine learning yang mendeteksi limbah plastik di permukaan air.',
                'desc1' => 'Aqua Vision menggunakan machine learning untuk mengidentifikasi berbagai jenis puing plastik di lautan, sungai, dan danau.',
                'desc2' => 'Ini memberikan data akurat kepada tim pembersihan untuk melawan polusi plastik laut.',
            ],
            [
                'id' => 4,
                'title' => 'PS2',
                'category' => 'Keberlanjutan',
                'author' => 'Darren A., Dylan L., Rayandra H., Brandon W.',
                'image' => 'https://picsum.photos/803/400',
                'short' => 'Charger solar portabel untuk ponsel dan lampu.',
                'desc1' => 'Tim membangun PS2 dengan meneliti sel fotovoltaik, desain model, dan regulasi voltase.',
                'desc2' => 'Ini membawa energi bersih dan mudah diakses ke dalam kehidupan sehari-hari.',
            ],
        ],
    ],

    'student_research' => [
        'title' => 'Riset Akademik Siswa',
        'description' => 'Makalah penelitian asli yang ditulis oleh siswa SMA, mencakup sains, teknologi, teknik, matematika, dan humaniora, dan terbuka untuk dibaca oleh siapa saja. Bagian dari Direktori Riset Open-Access Siswa (SOARED) kami.',
        'filters' => [
            'all' => 'Semua Bidang',
            'science' => 'Sains',
            'technology' => 'Teknologi',
            'engineering' => 'Teknik',
            'health' => 'Kesehatan',
            'sustainability' => 'Keberlanjutan',
        ],
        'read_paper' => 'Baca Makalah',
        'research' => [
            [
                'category' => 'STEM / Material',
                'title' => 'Bio-Metal Organic Framework berbasis Chromium Citric Acid untuk Adsorpsi Otomatis Penangkapan CO2 dengan Metode Multi-Objective Optimization AI',
                'author' => 'Cherish Kumala (Dwight School Seoul) dan tim',
                'description' => 'Studi ilmu material menggunakan AI untuk merancang material penangkapan karbon yang lebih baik.',
                'link' => '#',
            ],
            [
                'category' => 'Teknik / Keberlanjutan',
                'title' => 'Desain Reaktor Pirolisis untuk Daur Ulang Plastik Polypropylene untuk Mendapatkan Minyak Bebas sebagai Sumber Energi dari Masker Bekas (Mesin MOFUE)',
                'author' => 'Valerie Anastasia Wijoyo (British School Jakarta) dan tim',
                'description' => 'Desain reaktor yang mengubah masker plastik bekas menjadi minyak yang bisa digunakan.',
                'link' => '#',
            ],
            [
                'category' => 'Sains / Biomedis',
                'title' => 'Evaluasi Filogenetik Potensi Inhibitor ERK untuk Pengobatan Kanker Paru-paru',
                'author' => 'Rayden Yap (Jakarta Intercultural School) dan tim',
                'description' => 'Studi bioinformatika yang mencari kandidat obat kanker paru-paru baru.',
                'link' => '#',
            ],
            [
                'category' => 'STEM / Lingkungan',
                'title' => 'Desain Optimal Enzim Bio-Katalitik Berkelanjutan Menggunakan Metode Response Surface dan Pemodelan Artificial Neural Network untuk Pengolahan Air Limbah',
                'author' => 'Laurentia Liennart (SMAK 1 BPK Penabur Bandung) dan tim',
                'description' => 'Desain enzim yang dioptimalkan untuk pengolahan air limbah yang lebih bersih.',
                'link' => '#',
            ],
        ],
    ],

    'cta' => [
        'title' => 'Terinspirasi untuk <span class="font-[playfair]"> membangun </span> sesuatu <br> milikmu sendiri?',
        'description' => 'Setiap proyek di sini dimulai dari satu siswa dan satu ide. Kami bisa membantu mewujudkan ide kamu.',
        'button' => 'Mulai Proyekmu',
    ],
];