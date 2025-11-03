<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generative Chat - AI CV Analyzer</title>
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
                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
                        </svg>
                        Job Role
                    </li>
                    <li class="nav-item active">
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
                    <div class="search-bar">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#94a3b8">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                        <input type="text" placeholder="Search">
                    </div>
                </div>
                <div class="header-right">
                    <div class="notification-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#64748b">
                            <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
                        </svg>
                        <span class="notification-badge">2</span>
                    </div>
                    <div class="language-selector">
                        <svg class="flag-icon" viewBox="0 0 60 30"></svg>
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
                <!-- Page Title -->
                <div style="margin-bottom:16px;">
                    <div class="page-title" style="font-size:22px;">AI CV Screening</div>
                    <div class="page-subtitle">Establish your companys compantacy</div>
                </div>

                <!-- Chat Layout -->
                <div style="display:grid; grid-template-columns: 360px 1fr; gap:16px;">
                    <!-- Left: Chat History -->
                    <div class="card" style="padding:0; overflow:hidden;">
                        <div style="padding:16px; border-bottom:1px solid #e2e8f0; display:flex; justify-content:center;">
                            <button class="action-btn" style="background:#1e40af; color:#fff; border-color:#1e40af; width:140px;">
                                + New chat
                            </button>
                        </div>
                        <div style="padding:16px; display:flex; flex-direction:column; gap:16px;">
                            <div>
                                <div style="font-size:12px; color:#94a3b8; margin-bottom:8px;">Today</div>
                                <div style="display:flex; flex-direction:column; gap:10px;">
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Siapakah kandidat terbaik dengan…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Kandidat yang memiliki kriteria pen…</div>
                                </div>
                            </div>
                            <div>
                                <div style="font-size:12px; color:#94a3b8; margin-bottom:8px;">Yesterday</div>
                                <div style="display:flex; flex-direction:column; gap:10px;">
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Tampilkan kandidat terbaik untuk p…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Berikan 10 kandidat terbaik untuk p…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Rekomendasikan kandidat dari univ…</div>
                                </div>
                            </div>
                            <div>
                                <div style="font-size:12px; color:#94a3b8; margin-bottom:8px;">Previous 7 Days</div>
                                <div style="display:flex; flex-direction:column; gap:10px;">
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Apa kriteria utama untuk posisi mar…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Berapa banyak kandidat yang not…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Berikan rekomendasi kandidat terb…</div>
                                    <div style="font-size:13px; color:#334155; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">Berapa kandidat yang sesuai untuk…</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Chat Area -->
                    <div class="card" style="padding:0; overflow:hidden;">
                        <!-- Chat Header -->
                        <div style="padding:16px 20px; border-bottom:1px solid #e2e8f0; display:flex; align-items:center; justify-content:space-between;">
                            <div style="display:flex; align-items:center; gap:10px;">
                                <div style="font-weight:700; color:#1e293b;">Chat</div>
                                <span style="font-size:12px; background:#f1f5f9; color:#6b21a8; border:1px solid #e2e8f0; border-radius:6px; padding:2px 6px;">AI</span>
                            </div>
                            <button class="action-btn" aria-label="Refresh" style="width:32px; height:32px; display:flex; align-items:center; justify-content:center;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b"><path d="M17.65 6.35A7.95 7.95 0 0 0 12 4V1L7 6l5 5V7c3.31 0 6 2.69 6 6 0 1.01-.25 1.96-.69 2.8l1.46 1.46A7.94 7.94 0 0 0 20 13c0-2.21-.9-4.21-2.35-5.65zM6 13c0-1.01.25-1.96.69-2.8L5.23 8.74A7.94 7.94 0 0 0 4 13c0 2.21.9 4.21 2.35 5.65A7.95 7.95 0 0 0 12 22v3l5-5-5-5v3c-3.31 0-6-2.69-6-6z"/></svg>
                            </button>
                        </div>

                        <!-- Chat Body -->
                        <div style="padding:20px; display:flex; flex-direction:column; gap:16px;">
                            <!-- User message -->
                            <div style="display:flex; justify-content:flex-end;">
                                <div style="max-width:720px; background:#1e40af; color:#fff; border-radius:12px; padding:14px 16px; box-shadow:0 1px 2px rgba(0,0,0,0.08);">
                                    Berikan saya rekomendasi kandidat terbaik untuk posisi Marketing manager
                                    dengan Pengalaman bekerja 7 tahun.
                                </div>
                            </div>

                            <!-- AI reply -->
                            <div style="display:flex; justify-content:flex-start;">
                                <div style="max-width:720px; background:#f8fafc; color:#334155; border:1px solid #e2e8f0; border-radius:12px; padding:14px 16px; box-shadow:0 1px 2px rgba(0,0,0,0.04);">
                                    <div style="margin-bottom:8px; font-weight:600;">Rekomendasi Kandidat Terbaik untuk Posisi Marketing Manager (7 Tahun Pengalaman)</div>
                                    <ul style="padding-left:18px; line-height:1.6;">
                                        <li>Kandidat Utama: Bagus Santoso</li>
                                        <li>Skor Kecocokan: 92%</li>
                                        <li>Pengalaman Kerja: 7,5 tahun di bidang marketing dan brand strategy</li>
                                        <li>Posisi Terakhir: Senior Brand Manager di PT Unilever Indonesia</li>
                                        <li>Kompetensi Utama: Strategic Planning, Digital Marketing Campaigns, Team Leadership, ROI Optimization</li>
                                        <li>Sertifikasi: Google Ads Certified, Meta Blueprint</li>
                                    </ul>
                                    <div style="margin-top:10px;">Ia direkomendasikan karena memiliki pengalaman luas dalam merancang strategi pemasaran jangka panjang dan terbukti mampu meningkatkan brand awareness secara signifikan.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Composer -->
                        <div style="padding:12px 16px; border-top:1px solid #e2e8f0; background:#fff;">
                            <div style="display:flex; align-items:center; gap:12px; background:#f8fafc; border:1px solid #e2e8f0; border-radius:999px; padding:10px 14px;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="#94a3b8">
                                    <path d="M21 3L3 10l7 2 2 7 9-16z"/>
                                </svg>
                                <input type="text" placeholder="Write your massage" style="flex:1; border:none; background:transparent; outline:none; font-size:14px; color:#334155;">
                                <button class="action-btn" style="width:32px; height:32px; border-radius:50%; background:#1e40af; border-color:#1e40af; display:flex; align-items:center; justify-content:center;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="#fff"><path d="M2 21l21-9L2 3v7l15 2-15 2v7z"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>