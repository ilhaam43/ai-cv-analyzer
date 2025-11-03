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
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            @include('partials.header')
            

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
