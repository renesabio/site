<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renê Sábio - Inbound Marketing, CRM & RevOps</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-main: #050505; 
            --bg-card: #0F0F0F; 
            --text-main: #F8FAFC;
            --text-muted: #94A3B8;
            --accent: #C36F38; /* Conhaque/Cobre vibrante */
            --accent-hover: #e09257;
            --border-card: rgba(255, 255, 255, 0.08);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; transition: all 0.3s ease; }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-main);
            color: var(--text-muted);
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1000px; margin: 0 auto; padding: 0 24px; width: 100%; }

        h1, h2, h3 { font-family: 'Space Grotesk', sans-serif; color: var(--text-main); letter-spacing: -1px; }
        strong, b { color: var(--accent); font-weight: 700; }

        /* CABEÇALHO E MENU */
        header { 
            padding: 20px 0; 
            border-bottom: 1px solid var(--border-card);
            background: rgba(5, 5, 5, 0.95);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container { 
            font-family: 'Space Grotesk', sans-serif; 
            font-size: 28px; 
            font-weight: 800; 
            color: var(--text-main);
            text-decoration: none;
            letter-spacing: -1px;
        }
        .logo-container span { color: var(--accent); } 

        nav ul {
            list-style: none;
            display: flex;
            gap: 24px;
        }

        nav a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 500;
            font-size: 15px;
        }
        nav a:hover { color: var(--accent); }

        /* MENU HAMBÚRGUER MOBILE */
        .menu-toggle {
            display: none;
            background: transparent;
            border: none;
            color: var(--text-main);
            font-size: 24px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            nav {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--bg-main);
                border-bottom: 1px solid var(--border-card);
                display: none;
                flex-direction: column;
                padding: 20px;
            }
            nav.active { display: flex; }
            nav ul { flex-direction: column; gap: 16px; }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-wrap">
            <a href="/" class="logo-container">Renê<span>Sábio</span></a>
            <button class="menu-toggle" onclick="document.getElementById('main-nav').classList.toggle('active')">☰</button>
            <nav id="main-nav">
                <ul>
                    <li><a href="#historia">Minha História</a></li>
                    <li><a href="#atuacao">Como Atuo</a></li>
                    <li><a href="#comunidade">Inbound Hub</a></li>
                </ul>
            </nav>
        </div>
    </header>
