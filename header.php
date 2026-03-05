<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renê Sábio - Inbound Marketing, CRM & RevOps</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Cores Escuras (Header/Footer) */
            --bg-dark: #080808; 
            --text-light: #F8FAFC;
            --border-dark: #1F2937;
            
            /* Cores Claras (Interior do Site) */
            --bg-light: #FFFFFF;
            --bg-card: #F8FAFC;
            --text-dark: #111827;
            --text-muted: #4B5563;
            --border-light: #E5E7EB;
            
            /* Azul Tech */
            --accent: #2563EB; 
            --accent-hover: #1D4ED8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; transition: all 0.3s ease; }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-dark);
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }

        .container { max-width: 1000px; margin: 0 auto; padding: 0 24px; width: 100%; }

        h1, h2, h3, h4 { font-family: 'Space Grotesk', sans-serif; color: var(--text-dark); letter-spacing: -1px; }
        strong, b { color: var(--accent); font-weight: 700; }

        /* CABEÇALHO ESCURO */
        header { 
            background-color: var(--bg-dark);
            padding: 20px 0; 
            border-bottom: 1px solid var(--border-dark);
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
            color: var(--text-light);
            text-decoration: none;
            letter-spacing: -1px;
        }

        nav ul { list-style: none; display: flex; gap: 24px; }
        nav a { text-decoration: none; color: #94A3B8; font-weight: 500; font-size: 15px; }
        nav a:hover { color: var(--text-light); }

        /* BOTÕES GERAIS */
        .btn {
            display: inline-flex; 
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            background-color: var(--accent); 
            color: #FFFFFF !important;
            border: none; 
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            text-decoration: none !important; 
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
        }
        .btn:hover { background-color: var(--accent-hover); transform: scale(1.02); }
        .btn:disabled { background-color: #94A3B8; cursor: not-allowed; transform: none; }

        /* UTILITÁRIOS FORMS */
        .form-group { margin-bottom: 24px; text-align: left; }
        .form-label { display: block; font-weight: 600; margin-bottom: 8px; color: var(--text-dark); }
        .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-light);
            border-radius: 6px;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            color: var(--text-dark);
            background-color: #FFFFFF;
        }
        .form-select:focus { outline: none; border-color: var(--accent); }
    </style>
</head>
<body>
    <header>
        <div class="container header-wrap">
            <a href="index.php" class="logo-container">Renê Sábio</a>
            <nav>
                <ul>
                    <li><a href="construir-marca.php">Construir Marca</a></li>
                    <li><a href="raio-x-inbound.php">Raio-X Inbound</a></li>
                </ul>
            </nav>
        </div>
    </header>
