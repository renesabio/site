<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renê Sábio - Consultoria em Inbound Marketing, CRM & RevOps</title>
    
    <!-- ================= GOOGLE ANALYTICS (GA4) ================= -->
    <!-- Cole o seu script gtag.js abaixo desta linha. 
         Como o site usa PHP para reaproveitar este header, ao colar aqui, 
         o Google Analytics funcionará em TODAS as páginas (Briefing, Raio-X, etc). -->
    <!-- Exemplo:
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
    -->
    <!-- ========================================================== -->
    
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Cores e Temas */
            --bg-dark: #09090b;       
            --border-dark: #27272a;
            
            --bg-light: #ffffff;      
            --bg-alt: #f8fafc;        
            
            --text-dark: #0f172a;     
            --text-muted: #475569;    
            --text-light: #f8fafc;
            --border-light: #e2e8f0;
            
            --accent: #FF6600;        /* Laranja Tech */
            --accent-hover: #ea580c;
            
            --hub-indigo: #312e81;    /* Índigo do Inbound Hub */
            --hub-light: #e0e7ff;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; width: 100%; }

        h1, h2, h3, h4 { font-family: 'Space Grotesk', sans-serif; color: var(--text-dark); letter-spacing: -0.03em; }
        a { text-decoration: none; }

        /* ================= HEADER ================= */
        header { 
            background-color: var(--bg-dark);
            padding: 20px 0; 
            border-bottom: 1px solid var(--border-dark);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-wrap { display: flex; justify-content: space-between; align-items: center; }

        .logo-container { 
            font-family: 'Space Grotesk', sans-serif; 
            font-size: 24px; 
            letter-spacing: -0.04em;
        }
        .logo-rene { color: var(--text-light); font-weight: 800; }
        .logo-sabio { color: var(--accent); font-weight: 800; margin-left: 4px;}

        nav ul { list-style: none; display: flex; align-items: center; gap: 40px; }
        nav a { color: #a1a1aa; font-weight: 500; font-size: 15px; transition: color 0.2s; }
        nav a:hover { color: var(--text-light); }

        .btn-outline {
            color: var(--text-light) !important;
            border: 1px solid var(--border-dark);
            padding: 10px 24px;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .btn-outline:hover { background-color: var(--text-light); color: var(--bg-dark) !important; }

        .menu-toggle { display: none; background: transparent; border: none; color: var(--text-light); font-size: 28px; cursor: pointer; }

        @media (max-width: 768px) {
            .menu-toggle { display: block; }
            nav {
                position: absolute; top: 100%; left: 0; width: 100%;
                background: var(--bg-dark); border-bottom: 1px solid var(--border-dark);
                display: none; flex-direction: column; padding: 30px 24px;
            }
            nav.active { display: flex; }
            nav ul { flex-direction: column; gap: 24px; align-items: flex-start; width: 100%;}
            .btn-outline { width: 100%; text-align: center; }
        }

        /* ================= BOTÕES ================= */
        .btn-main {
            display: inline-flex; align-items: center; justify-content: center;
            padding: 16px 32px; background-color: var(--accent); color: #FFFFFF !important;
            border: none; font-family: 'Outfit', sans-serif; font-weight: 600;
            border-radius: 8px; font-size: 16px; cursor: pointer; transition: all 0.2s;
        }
        .btn-main:hover { background-color: var(--accent-hover); transform: translateY(-2px); }

        /* ================= UTILITÁRIOS FORMS ================= */
        .form-container { max-width: 800px; margin: 0 auto; background: #fff; padding: 56px; border-radius: 16px; border: 1px solid var(--border-light); box-shadow: 0 20px 40px -10px rgba(0,0,0,0.05);}
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
        @media (max-width: 600px) { .row { grid-template-columns: 1fr; } .form-container { padding: 32px 24px; } }
        
        .form-group { margin-bottom: 28px; }
        .form-label { display: block; font-weight: 600; margin-bottom: 10px; color: var(--text-dark); font-size: 15px; }
        .form-label span { color: var(--text-muted); font-weight: 400; font-size: 13px; display: block; margin-top: 4px; line-height: 1.4;}
        
        .form-control {
            width: 100%; padding: 16px; border: 1px solid var(--border-light);
            border-radius: 8px; font-family: 'Outfit', sans-serif; font-size: 15px;
            color: var(--text-dark); background-color: #f8fafc; transition: all 0.2s;
        }
        .form-control:focus { outline: none; border-color: var(--accent); background-color: #fff; box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1); }
        textarea.form-control { resize: vertical; min-height: 120px; }

    </style>
</head>
<body>
    <header>
        <div class="container header-wrap">
            <a href="index.php" class="logo-container">
                <span class="logo-rene">Renê</span> <span class="logo-sabio">Sábio</span>
            </a>
            <button class="menu-toggle" onclick="document.getElementById('main-nav').classList.toggle('active')">☰</button>
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php#ferramentas">Ferramentas</a></li>
                    <li><a href="https://inboundhub.com.br/" target="_blank" rel="noopener">Inbound Hub</a></li>
                    <li><a href="https://wa.me/5511939009202?text=Ol%C3%A1%2C%20vim%20pelo%20seu%20site%20e%20gostaria%20de%20conversar." target="_blank" class="btn-outline">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
