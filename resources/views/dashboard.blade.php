<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI CV Analyzer - Lintasarta</title>
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
                <div class="page-header">
                    <div>
                        <h1 class="page-title">AI CV Analyzer</h1>
                        <p class="page-subtitle">Track open roles and candidate match results in real-time.</p>
                    </div>
                    <button class="download-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/>
                        </svg>
                    </button>
                </div>

                <!-- Stats Grid -->
                <div class="stats-grid">
                    <div class="stat-card blue">
                        <div class="stat-header">
                            <div class="stat-icon blue">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                </svg>
                            </div>
                            <div class="stat-info">
                                <div class="stat-label">Partially Pass</div>
                                <div class="stat-time">Posted 2 days ago</div>
                            </div>
                        </div>
                        <div class="stat-value">4.396</div>
                        <div class="stat-change up">
                            <span>↗</span> 1.5% Up from past week
                        </div>
                    </div>

                    <div class="stat-card blue">
                        <div class="stat-header">
                            <div class="stat-icon blue">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                </svg>
                            </div>
                            <div class="stat-info">
                                <div class="stat-label">Partially Pass</div>
                                <div class="stat-time">Posted 2 days ago</div>
                            </div>
                        </div>
                        <div class="stat-value">4.396</div>
                        <div class="stat-change up">
                            <span>↗</span> 1.5% Up from past week
                        </div>
                    </div>

                    <div class="stat-card blue">
                        <div class="stat-header">
                            <div class="stat-icon blue">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                </svg>
                            </div>
                            <div class="stat-info">
                                <div class="stat-label">Partially Pass</div>
                                <div class="stat-time">Posted 2 days ago</div>
                            </div>
                        </div>
                        <div class="stat-value">4.396</div>
                        <div class="stat-change up">
                            <span>↗</span> 1.5% Up from past week
                        </div>
                    </div>

                    <div class="stat-card blue">
                        <div class="stat-header">
                            <div class="stat-icon blue">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="#3b82f6">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                                </svg>
                            </div>
                            <div class="stat-info">
                                <div class="stat-label">Partially Pass</div>
                                <div class="stat-time">Posted 2 days ago</div>
                            </div>
                        </div>
                        <div class="stat-value">4.396</div>
                        <div class="stat-change up">
                            <span>↗</span> 1.5% Up from past week
                        </div>
                    </div>
                </div>
                

                <!-- Content Grid -->
                <div class="content-grid">
                    <!-- Top 3 Candidates -->
                    <div class="card">
                        <h2 class="card-title">TOP 3 Candidate</h2>
                        <div class="top-candidates-list">
                            <div class="candidate-item">
                                <div class="candidate-info">
                                    <div class="candidate-name">Charlie Kayesha</div>
                                    <div class="candidate-position">Sr. UX Designer</div>
                                </div>
                                <div class="candidate-score">
                                    94%
                                    <span class="trophy-icon">🏆</span>
                                </div>
                            </div>
                            <div class="candidate-item">
                                <div class="candidate-info">
                                    <div class="candidate-name">Aditya Mahadika</div>
                                    <div class="candidate-position">Financial Analyst</div>
                                </div>
                                <div class="candidate-score">
                                    90%
                                    <span class="trophy-icon">🏆</span>
                                </div>
                            </div>
                            <div class="candidate-item">
                                <div class="candidate-info">
                                    <div class="candidate-name">Cantika Amelia</div>
                                    <div class="candidate-position">Financial Analyst</div>
                                </div>
                                <div class="candidate-score">
                                    88%
                                    <span class="trophy-icon">🏆</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Candidate Chart -->
                    <div class="card">
                        <h2 class="card-title">Candidate</h2>
                        <div class="chart-container">
                            <div class="donut-chart">
                                <svg class="donut-svg" width="240" height="240" viewBox="0 0 240 240">
                                    <!-- Green segment (65%) -->
                                    <circle cx="120" cy="120" r="90" fill="none" stroke="#10b981" stroke-width="40" 
                                            stroke-dasharray="367 367" stroke-dashoffset="0"/>
                                    <!-- Purple segment (35%) -->
                                    <circle cx="120" cy="120" r="90" fill="none" stroke="#8b5cf6" stroke-width="40" 
                                            stroke-dasharray="198 367" stroke-dashoffset="-367"/>
                                </svg>
                            </div>
                            <div class="chart-legend">
                                <div class="legend-item">
                                    <div class="legend-color purple"></div>
                                    <span class="legend-label">35%</span>
                                </div>
                                <div class="legend-item">
                                    <div class="legend-color green"></div>
                                    <span class="legend-label">65%</span>
                                </div>
                            </div>
                            <div class="chart-total">45.689 Candidate Total</div>
                        </div>
                    </div>
                </div>

                <!-- Candidate List Table -->
                <div class="card">
                    <div class="table-header">
                        <div>
                            <div class="table-title">Candidate List</div>
                            <div class="table-subtitle">See all screened applicants and their fit scores.</div>
                        </div>
                        <div class="table-actions">
                            <button class="action-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b">
                                    <path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/>
                                </svg>
                            </button>
                            <button class="action-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#64748b">
                                    <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </button>
                            <button class="action-btn reset-filter">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#ef4444">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11H7v-2h10v2z"/>
                                </svg>
                                Reset Filter
                            </button>
                            <input type="text" class="search-input" placeholder="🔍 Search Candidate">
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
                            <div class="pagination-info">Showing 1-8 of 45.689</div>
                            <div class="pagination-controls">
                                <button class="pagination-btn">‹</button>
                                <button class="pagination-btn">›</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</html>