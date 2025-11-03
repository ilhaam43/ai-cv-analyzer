<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate - AI CV Analyzer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/lintasarta-logo.png') }}" alt="Lintasarta Logo" style="height:24px;">
            </div>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <svg class="nav-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                        </svg>
                        Home
                    </li>
                    <li class="nav-item active">
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
                <!-- Job Openings -->
                <section class="jobs-section">
                    <div class="section-header">
                        <div>
                            <div class="page-title" style="font-size:22px">Job Openings</div>
                            <div class="page-subtitle">View active roles and monitor application trends.</div>
                        </div>
                        <div class="section-controls">
                            <button class="action-btn">Sort By: Latest ▾</button>
                            <button class="action-btn" aria-label="Upload">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                            </button>
                        </div>
                    </div>
                    <div class="jobs-grid">
                        <!-- Card 1 -->
                        <div class="job-card">
                            <div class="job-card-head">
                                <div class="job-title">Sr. UX Designer</div>
                                <span class="job-badge">2</span>
                            </div>
                            <div class="job-meta">Posted 5 days ago</div>
                            <div class="job-tags">
                                <span class="tag">Jakarta</span>
                                <span class="tag">3 years exp.</span>
                            </div>
                            <div class="job-stats">
                                <div class="stat-number">45</div>
                                <div class="stat-detail">
                                    <div class="stat-label">applications</div>
                                    <div class="stat-trend">25 in last week</div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="job-card">
                            <div class="job-card-head">
                                <div class="job-title">Growth Manager</div>
                                <span class="job-badge">2</span>
                            </div>
                            <div class="job-meta">Posted 5 days ago</div>
                            <div class="job-tags">
                                <span class="tag">Remote</span>
                                <span class="tag">2+ years exp.</span>
                            </div>
                            <div class="job-stats">
                                <div class="stat-number">38</div>
                                <div class="stat-detail">
                                    <div class="stat-label">applications</div>
                                    <div class="stat-trend">10 in last week</div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="job-card">
                            <div class="job-card-head">
                                <div class="job-title">Financial Analyst</div>
                                <span class="job-badge">2</span>
                            </div>
                            <div class="job-meta">Posted 10 days ago</div>
                            <div class="job-tags">
                                <span class="tag">Jakarta</span>
                                <span class="tag">5+ years exp.</span>
                            </div>
                            <div class="job-stats">
                                <div class="stat-number">72</div>
                                <div class="stat-detail">
                                    <div class="stat-label">applications</div>
                                    <div class="stat-trend">15 in last week</div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="job-card">
                            <div class="job-card-head">
                                <div class="job-title">Security Analyst</div>
                                <span class="job-badge">2</span>
                            </div>
                            <div class="job-meta">Posted 20 days ago</div>
                            <div class="job-tags">
                                <span class="tag">Jakarta</span>
                                <span class="tag">7+ years exp.</span>
                            </div>
                            <div class="job-stats">
                                <div class="stat-number">127</div>
                                <div class="stat-detail">
                                    <div class="stat-label">applications</div>
                                    <div class="stat-trend">7 in last week</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Candidate List -->
                <section>
                    <div class="table-header">
                        <div>
                            <div class="table-title">Candidate List</div>
                            <div class="table-subtitle">See all screened applicants and their fit scores.</div>
                        </div>
                        <div class="table-actions">
                            <button class="action-btn" aria-label="Filter">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b"><path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/></svg>
                            </button>
                            <button class="action-btn reset-filter">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#ef4444"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11H7v-2h10v2z"/></svg>
                                Reset Filter
                            </button>
                            <input type="text" class="search-input" placeholder="Search Candidate">
                        </div>
                    </div>

                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Fit Score ⇵</th>
                                    <th>Job Applied ⇵</th>
                                    <th>Submission Date ⇵</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Charlie Kayesha</td>
                                    <td>94%</td>
                                    <td>Sr. UX Designer</td>
                                    <td>08/07/2025</td>
                                    <td><span class="status-badge pass">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Aditya Mahadika</td>
                                    <td>90%</td>
                                    <td>Financial Analyst</td>
                                    <td>02/07/2025</td>
                                    <td><span class="status-badge pass">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Melia Anida</td>
                                    <td>47%</td>
                                    <td>Financial Analyst</td>
                                    <td>08/07/2025</td>
                                    <td><span class="status-badge not-pass">Not Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Simon Mark Jacc</td>
                                    <td>72%</td>
                                    <td>Sr. UX Designer</td>
                                    <td>08/07/2025</td>
                                    <td><span class="status-badge partially">Partially Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Cantika Amelia</td>
                                    <td>88%</td>
                                    <td>Financial Analyst</td>
                                    <td>03/07/2025</td>
                                    <td><span class="status-badge pass">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Joe Daniel</td>
                                    <td>82%</td>
                                    <td>Sr. UX Designer</td>
                                    <td>05/07/2025</td>
                                    <td><span class="status-badge pass">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Kenzio Ali</td>
                                    <td>93%</td>
                                    <td>Sr. UX Designer</td>
                                    <td>08/07/2025</td>
                                    <td><span class="status-badge pass">Pass</span></td>
                                </tr>
                                <tr>
                                    <td>Ayesha Valecia</td>
                                    <td>51%</td>
                                    <td>Growth Manager</td>
                                    <td>03/07/2025</td>
                                    <td><span class="status-badge not-pass">Not Pass</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <div class="pagination-info">Showing 1-8 of 45,689</div>
                            <div class="pagination-controls">
                                <button class="pagination-btn">‹</button>
                                <button class="pagination-btn">›</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
