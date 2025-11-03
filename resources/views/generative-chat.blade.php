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
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            @include('partials.header')

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