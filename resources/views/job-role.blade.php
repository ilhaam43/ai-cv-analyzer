<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Roles - AI CV Analyzer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/lintasarta-logo.png') }}" alt="Lintasarta Logo" style="height:70px;">
            </div>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                        Home
                    </li>
                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                        Candidate
                    </li>
                    <li class="nav-item active">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                        Job Role
                    </li>
                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
                        </svg>
                        Generative Chat
                    </li>
                </ul>
            </nav>
            <div class="sidebar-bottom">
                <div class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94L14.4 2.81c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/>
                    </svg>
                    Settings
                </div>
                <div class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                    </svg>
                    Logout
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <div class="header-left">
                    <svg class="menu-icon" viewBox="0 0 24 24" fill="#64748b">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                </div>
                <div class="header-right">
                    <div class="notification-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#64748b">
                            <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
                        </svg>
                        <span class="notification-badge">2</span>
                    </div>
                    <div class="language-selector">
                        <svg class="flag-icon" viewBox="0 0 60 30">
                            <clipPath id="s"><path d="M0,0 v30 h60 v-30 z"/></clipPath>
                            <clipPath id="t"><path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/></clipPath>
                            <g clip-path="url(#s)"><path d="M0,0 v30 h60 v-30 z" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/><path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#C8102E" stroke-width="4"/><path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/><path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/></g>
                        </svg>
                        <span style="font-size: 14px; color: #1e293b;">English</span>
                    </div>
                    <div class="user-profile">
                        <div class="user-avatar"></div>
                        <div class="user-info">
                            <div class="user-name">Lintasarta</div>
                            <div class="user-role">Admin</div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <div class="page-content">
                <!-- Header for Job Roles -->
                <section class="jobs-section">
                    <div class="section-header">
                        <div>
                            <div class="page-title" style="font-size:22px">Job Roles</div>
                            <div class="page-subtitle">Establish your company's competency</div>
                        </div>
                        <div class="section-controls">
                            <div class="role-search" style="position:relative;">
                                <input type="text" id="jobRoleSearch" class="search-input" placeholder="Search Job Roles" style="width:340px; border-radius:999px; padding-right:36px;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#94a3b8" style="position:absolute; right:12px; top:50%; transform:translateY(-50%);">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                </svg>
                            </div>
                            <button class="action-btn" aria-label="Add Role">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b"><path d="M19 13H13v6h-2v-6H5v-2h6V5h2v6h6z"/></svg>
                            </button>
                            <button class="action-btn" aria-label="Upload">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                            </button>
                        </div>
                    </div>
                </section>

                

                <!-- Job Roles Table -->
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Job Position</th>
                                <th>Requirement</th>
                                <th>Qualification</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:220px; font-weight:600;">Product Development Supervisor</td>
                                <td>
                                    <ul style="padding-left:18px; line-height:1.6; color:#334155;">
                                        <li>Minimal pendidikan S1 di bidang Teknik, Manajemen Produk, atau setara</li>
                                        <li>Pengalaman kerja minimal 5 tahun di bidang product development atau R&amp;D</li>
                                        <li>Pengalaman minimal 1–2 tahun sebagai supervisor atau memimpin tim kecil</li>
                                        <li>Memahami proses pengembangan produk dari riset hingga launching</li>
                                        <li>Terbiasa bekerja dengan tim lintas fungsi (engineering, marketing, QC, dll)</li>
                                        <li>Mampu membuat timeline dan memonitor progres pengembangan produk</li>
                                        <li>Menguasai tools dokumentasi dan project tracking</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="padding-left:18px; line-height:1.6; color:#334155;">
                                        <li>Keterampilan leadership dan komunikasi yang kuat</li>
                                        <li>Kemampuan analitis dan problem solving yang baik</li>
                                        <li>Teliti dan detail dalam dokumentasi serta validasi produk</li>
                                        <li>Mampu mengelola beberapa proyek secara paralel</li>
                                        <li>Inisiatif tinggi dan mampu bekerja secara mandiri maupun tim</li>
                                        <li>Nilai tambah: pengalaman di industri terkait (teknologi)</li>
                                    </ul>
                                </td>
                                <td style="width:120px;">
                                    <div style="display:flex; gap:10px;">
                                        <a href="#" title="Edit" aria-label="Edit">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#1e293b"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM21.41 6.34a1.25 1.25 0 0 0 0-1.77l-1.99-1.99a1.25 1.25 0 0 0-1.77 0l-1.83 1.83 3.75 3.75 1.84-1.82z"/></svg>
                                        </a>
                                        <a href="#" title="Delete" aria-label="Delete">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ef4444"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:220px; font-weight:600;">Financial Analyst</td>
                                <td>
                                    <ul style="padding-left:18px; line-height:1.6; color:#334155;">
                                        <li>Pendidikan minimal S1 di bidang Keuangan, Akuntansi, Ekonomi, atau setara</li>
                                        <li>Pengalaman minimal 2–3 tahun di bidang analisis keuangan</li>
                                        <li>Menguasai Microsoft Excel (pivot, lookup, formula lanjutan)</li>
                                        <li>Terbiasa menggunakan software keuangan atau ERP (SAP, Oracle, dll)</li>
                                        <li>Memahami laporan keuangan: neraca, laba rugi, arus kas</li>
                                        <li>Mampu membuat proyeksi keuangan dan analisis ROI</li>
                                        <li>Mampu bekerja dengan tenggat waktu dan deadline analisis bulanan</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul style="padding-left:18px; line-height:1.6; color:#334155;">
                                        <li>Kemampuan analitis dan logika yang kuat</li>
                                        <li>Teliti, detail-oriented, dan rapi dalam menyusun laporan</li>
                                        <li>Komunikatif dan bisa menjelaskan data ke tim non-keuangan</li>
                                        <li>Proaktif dalam memberikan insight dan rekomendasi keuangan</li>
                                        <li>Mampu bekerja secara mandiri maupun tim</li>
                                        <li>Nilai tambah: memiliki sertifikasi keuangan (CFA, CPA, atau sejenis)</li>
                                    </ul>
                                </td>
                                <td style="width:120px;">
                                    <div style="display:flex; gap:10px;">
                                        <a href="#" title="Edit" aria-label="Edit">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#1e293b"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM21.41 6.34a1.25 1.25 0 0 0 0-1.77l-1.99-1.99a1.25 1.25 0 0 0-1.77 0l-1.83 1.83 3.75 3.75 1.84-1.82z"/></svg>
                                        </a>
                                        <a href="#" title="Delete" aria-label="Delete">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#ef4444"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <div class="pagination-info">Showing 1-2 of 2</div>
                        <div class="pagination-controls">
                            <button class="pagination-btn">‹</button>
                            <button class="pagination-btn">›</button>
                        </div>
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const searchInput = document.getElementById('jobRoleSearch');
                        const rows = Array.from(document.querySelectorAll('.table-wrapper tbody tr'));

                        function normalize(text) { return (text || '').toLowerCase().trim(); }

                        function rowMatches(row, term) {
                            const t = normalize(term);
                            if (!t) return true;
                            const cellsText = Array.from(row.cells).map(td => normalize(td.innerText));
                            return cellsText.some(txt => txt.includes(t));
                        }

                        function filterRows() {
                            const q = searchInput ? searchInput.value : '';
                            let visible = 0;
                            rows.forEach(row => {
                                const show = rowMatches(row, q);
                                row.style.display = show ? '' : 'none';
                                if (show) visible++;
                            });
                            const info = document.querySelector('.pagination-info');
                            if (info) info.textContent = `Showing ${visible} of ${rows.length}`;
                        }

                        if (searchInput) {
                            searchInput.addEventListener('input', filterRows);
                        }
                    });
                </script>
            </div>
        </main>
    </div>

</body>
</html>