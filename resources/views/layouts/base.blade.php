<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { margin: 16px; color: #222; }
        header, .columns, footer { margin-bottom: 0px; }
        header, .columns { display: flex; gap: 0px; }
        .header-box, aside, main, footer { border: 1px solid #999; padding: 12px; }
        .header-box { flex: 1; }
        aside { width: 180px; }
        main { flex: 1; min-height: 260px; }
        .content-area { display: flex; gap: 20px; margin-top: 12px; }
        .content-links { min-width: 130px; }
        .content-links a { display: block; margin: 8px 0; }
        .child-content { flex: 1; }
        footer { text-align: center; }
        input { display: block; margin: 4px 0 12px; padding: 5px; }
        button { padding: 6px 12px; }
        @media (max-width: 700px) { header, .columns { display: block; } aside, main { width: auto; margin-bottom: 10px; } }
    </style>
</head>
<body>
<header>
    <div class="header-box"><strong>LEFT HEADER</strong></div>
    <div class="header-box"><strong>RIGHT HEADER</strong>></div>
</header>
<div class="columns">
    <aside><strong>LEFT NAVIGATION</strong>
        <p><a href="{{ route('home') }}">Beranda</a></p><p><a href="{{ route('nim.form') }}">Form NIM</a></p>
        <p><a href="{{ route('courses') }}">Courses</a></p><p><a href="{{ route('students') }}">Students</a></p>
        <p><a href="{{ route('grades') }}">Grades</a></p><p><a href="{{ route('assignments') }}">Assignments</a></p>
    </aside>
    <main><strong>CONTENT</strong>
        <div class="content-area">
            <nav class="content-links" aria-label="Navigasi Courses, Students, Grades, Assignments">
                <a href="{{ route('courses') }}">Courses</a>
                <a href="{{ route('students') }}">Students</a>
                <a href="{{ route('grades') }}">Grades</a>
                <a href="{{ route('assignments') }}">Assignments</a>
            </nav>
            <section class="child-content">
                @yield('content')
            </section>
        </div>
    </main>
    <aside><strong>Kanan</strong></aside>
</div>
<footer>Footer</footer>
</body>
</html>
