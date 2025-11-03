<header class="header">
    <div class="header-left">
        <svg class="menu-icon" viewBox="0 0 24 24" fill="#64748b">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
        @if (!request()->is('job-role'))
        <div class="search-bar">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#94a3b8">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
            </svg>
            <input type="text" placeholder="Search">
        </div>
        @endif
    </div>
    <div class="header-right">
        <div class="notification-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="#64748b">
                <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/>
            </svg>
            <span class="notification-badge">2</span>
        </div>
        <div class="language-selector">
            <svg class="flag-icon" viewBox="0 0 60 30" aria-label="United Kingdom flag">
                <clipPath id="s"><path d="M0,0 v30 h60 v-30 z"/></clipPath>
                <clipPath id="t"><path d="M30,15 h30 v15 z v15 h-30 z h-30 v-15 z v-15 h30 z"/></clipPath>
                <g clip-path="url(#s)">
                    <path d="M0,0 v30 h60 v-30 z" fill="#012169"/>
                    <path d="M0,0 L60,30 M60,0 L0,30" stroke="#fff" stroke-width="6"/>
                    <path d="M0,0 L60,30 M60,0 L0,30" clip-path="url(#t)" stroke="#C8102E" stroke-width="4"/>
                    <path d="M30,0 v30 M0,15 h60" stroke="#fff" stroke-width="10"/>
                    <path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/>
                </g>
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