<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevFlow Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4F46E5;
            --primary-hover: #4338CA;
            --bg-color: #F3F4F6;
            --surface: #FFFFFF;
            --text-main: #111827;
            --text-muted: #6B7280;
            --sidebar-bg: #111827;
            --sidebar-text: #D1D5DB;
            --border: #E5E7EB;
            
            --success: #10B981;
            --warning: #F59E0B;
            --danger: #EF4444;
            --info: #3B82F6;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar-bg);
            color: var(--sidebar-text);
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #4F46E5, #EC4899);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .sidebar-header h2 {
            color: white;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .nav-menu {
            padding: 24px 0;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-item {
            padding: 12px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--sidebar-text);
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.05);
            color: white;
        }

        .nav-item.active {
            background-color: rgba(79, 70, 229, 0.15);
            color: var(--primary);
            border-right: 4px solid var(--primary);
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        /* Main Content */
        .main-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* Topbar */
        .topbar {
            height: 70px;
            background-color: var(--surface);
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .page-title {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .user-info h4 {
            font-size: 0.875rem;
            color: var(--text-main);
        }

        .user-info p {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* Dashboard Content */
        .content {
            padding: 32px;
            overflow-y: auto;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background-color: var(--surface);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .stat-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-projects { background-color: rgba(79, 70, 229, 0.1); color: var(--primary); }
        .icon-sprints { background-color: rgba(16, 185, 129, 0.1); color: var(--success); }
        .icon-tasks { background-color: rgba(245, 158, 11, 0.1); color: var(--warning); }
        .icon-users { background-color: rgba(239, 68, 68, 0.1); color: var(--danger); }

        .stat-icon svg {
            width: 28px;
            height: 28px;
            fill: currentColor;
        }

        .stat-details h3 {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-bottom: 4px;
            font-weight: 500;
        }

        .stat-details p {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-main);
        }

        /* Widgets Area */
        .widgets-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
        }

        .widget-card {
            background-color: var(--surface);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .widget-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .widget-title {
            font-size: 1.125rem;
            font-weight: 600;
        }

        .btn-sm {
            padding: 6px 12px;
            background-color: rgba(79, 70, 229, 0.1);
            color: var(--primary);
            border: none;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-sm:hover {
            background-color: var(--primary);
            color: white;
        }

        /* Task List */
        .task-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .task-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: 12px;
            transition: border-color 0.2s;
        }

        .task-item:hover {
            border-color: var(--primary);
        }

        .task-main {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .task-status {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .status-todo { background-color: var(--border); }
        .status-progress { background-color: var(--info); }
        .status-review { background-color: var(--warning); }
        .status-done { background-color: var(--success); }

        .task-info h4 {
            font-size: 0.95rem;
            margin-bottom: 2px;
        }

        .task-info p {
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .task-meta {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .badge {
            padding: 4px 10px;
            border-radius: 99px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .badge-high { background-color: rgba(239, 68, 68, 0.1); color: var(--danger); }
        .badge-normal { background-color: rgba(16, 185, 129, 0.1); color: var(--success); }

        /* Responsive */
        @media (max-width: 1024px) {
            .widgets-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                height: 100vh;
                z-index: 20;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo-icon">D</div>
            <h2>DevFlow</h2>
        </div>
        <nav class="nav-menu">
            <a href="#" class="nav-item active">
                <svg class="nav-icon" viewBox="0 0 20 20"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/></svg>
                Dashboard
            </a>
            <a href="#" class="nav-item">
                <svg class="nav-icon" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/></svg>
                Projects
            </a>
            <a href="#" class="nav-item">
                <svg class="nav-icon" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>
                Tasks
            </a>
            <a href="#" class="nav-item">
                <svg class="nav-icon" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/></svg>
                Users & Team
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-wrapper">
        <!-- Topbar -->
        <header class="topbar">
            <h1 class="page-title">Overview</h1>
            
            <div class="user-profile">
                <div class="user-info" style="text-align: right;">
                    <h4>Neo Admin</h4>
                    <p>Super Administrator</p>
                </div>
                <div class="avatar">NA</div>
            </div>
        </header>

        <!-- Content -->
        <div class="content">
            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon icon-projects">
                        <svg viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/></svg>
                    </div>
                    <div class="stat-details">
                        <h3>Total Projects</h3>
                        <p>{{ $stats['projects'] ?? 0 }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon icon-sprints">
                        <svg viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="stat-details">
                        <h3>Active Sprints</h3>
                        <p>{{ $stats['sprints'] ?? 0 }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon icon-tasks">
                        <svg viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="stat-details">
                        <h3>Total Tasks</h3>
                        <p>{{ $stats['tasks'] ?? 0 }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon icon-users">
                        <svg viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/></svg>
                    </div>
                    <div class="stat-details">
                        <h3>Team Members</h3>
                        <p>{{ $stats['users'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Widgets -->
            <div class="widgets-grid">
                <!-- Recent Tasks -->
                <div class="widget-card">
                    <div class="widget-header">
                        <h2 class="widget-title">Recent Tasks</h2>
                        <button class="btn-sm">View All</button>
                    </div>
                    
                    <div class="task-list">
                        <!-- Task Item -->
                        <div class="task-item">
                            <div class="task-main">
                                <div class="task-status status-progress"></div>
                                <div class="task-info">
                                    <h4>Design Database Schema</h4>
                                    <p>Sprint #1 • Assigned to Neo</p>
                                </div>
                            </div>
                            <div class="task-meta">
                                <span class="badge badge-high">High Priority</span>
                                <span style="font-size: 0.85rem; color: var(--text-muted);">Today</span>
                            </div>
                        </div>

                        <!-- Task Item -->
                        <div class="task-item">
                            <div class="task-main">
                                <div class="task-status status-todo"></div>
                                <div class="task-info">
                                    <h4>Setup Laravel Authentication</h4>
                                    <p>Sprint #1 • Unassigned</p>
                                </div>
                            </div>
                            <div class="task-meta">
                                <span class="badge badge-normal">Normal</span>
                                <span style="font-size: 0.85rem; color: var(--text-muted);">Tomorrow</span>
                            </div>
                        </div>
                        
                        <!-- Task Item -->
                        <div class="task-item">
                            <div class="task-main">
                                <div class="task-status status-done"></div>
                                <div class="task-info">
                                    <h4>Initialize Project Repository</h4>
                                    <p>Sprint #1 • Assigned to Neo</p>
                                </div>
                            </div>
                            <div class="task-meta">
                                <span class="badge badge-normal">Normal</span>
                                <span style="font-size: 0.85rem; color: var(--text-muted);">Yesterday</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Activity -->
                <div class="widget-card">
                    <div class="widget-header">
                        <h2 class="widget-title">Activity Logs</h2>
                    </div>
                    
                    <div style="position: relative; padding-left: 20px; border-left: 2px solid var(--border); display: flex; flex-direction: column; gap: 24px; margin-top: 20px;">
                        <!-- Log Item -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -27px; top: 0; width: 12px; height: 12px; background: var(--primary); border-radius: 50%; border: 3px solid var(--surface);"></div>
                            <p style="font-size: 0.875rem; color: var(--text-main); font-weight: 500;">Project DevFlow Created</p>
                            <p style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">2 hours ago by Neo Admin</p>
                        </div>
                        <!-- Log Item -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -27px; top: 0; width: 12px; height: 12px; background: var(--border); border-radius: 50%; border: 3px solid var(--surface);"></div>
                            <p style="font-size: 0.875rem; color: var(--text-main); font-weight: 500;">Database Migrated</p>
                            <p style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">3 hours ago by System</p>
                        </div>
                        <!-- Log Item -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -27px; top: 0; width: 12px; height: 12px; background: var(--border); border-radius: 50%; border: 3px solid var(--surface);"></div>
                            <p style="font-size: 0.875rem; color: var(--text-main); font-weight: 500;">System Initialized</p>
                            <p style="font-size: 0.75rem; color: var(--text-muted); margin-top: 4px;">Yesterday</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
