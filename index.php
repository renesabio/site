<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renê Sábio - Inbound Marketing & RevOps</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@500;700;800&display=swap');

        /* PALETA DEFINITIVA: PRETO & AZUL TECH */
        :root {
            --bg-main: #080808;       /* Preto profundo absoluto */
            --bg-card: #121212;       /* Preto textura para os cards */
            --text-main: #F8FAFC;     /* Branco nítido para títulos */
            --text-muted: #94A3B8;    /* Cinza azulado para leitura suave */
            --accent: #2563EB;        /* Azul Tech vibrante */
            --accent-hover: #1D4ED8;  /* Azul Tech escurecido para hover */
            --border-card: #1F2937;   /* Borda subtil */
            --shadow-neon: 0 0 12px rgba(37, 99, 235, 0.4);
        }

        /* RESET E ESTRUTURA */
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); 
        }

        html, body {
            height: 100%;
            background-color: var(--bg-main);
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: var(--text-muted); 
            /* 100dvh garante que ocupe 100% da tela no mobile ignorando a barra do Chrome */
            min-height: 100dvh; 
            display: flex;
            flex-direction: column;
            -webkit-font-smoothing: antialiased;
        }

        .container { 
            max-width: 1000px; 
            margin: 0 auto; 
            padding: 0 24px; 
            width: 100%; 
        }

        header { padding: 40px 0; }
        
        /* LOGOTIPO DEFINITIVO (Renê Sábio - Normal Negrito) */
        .logo-container { 
            font-family: 'Space Grotesk', sans-serif; 
            font-size: 32px; 
            font-weight: 800; 
            letter-spacing: -1px; 
            color: var(--text-main);
            display: inline-block;
            text-decoration: none;
        }
        .logo-container span.hl { color: var(--accent); } 

        /* TIPOGRAFIA GERAL */
        h1, h2, h3 {
            font-family: 'Space Grotesk', sans-serif;
            color: var(--text-main);
            letter-spacing: -1px;
        }

        strong, b {
            color: var(--accent);
            font-weight: 700;
        }

        /* SECÇÃO HERO */
        .hero { padding: 80px 0 60px; }
        .hero h1 { 
            font-size: 64px; 
            line-height: 1.05; 
            margin-bottom: 24px; 
            letter-spacing: -2px; 
            font-weight: 800;
        }
        .hero p { 
            font-size: 20px; 
            color: var(--text-muted); 
            max-width: 750px; 
            line-height: 1.6; 
            font-weight: 400; 
        }

        /* CARTÕES */
        .cards-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 24px; 
            margin-top: 40px; 
            padding-bottom: 80px; 
        }
        .card { 
            background-color: var(--bg-card); 
            padding: 40px; 
            border-radius: 12px; 
            border: 1px solid var(--border-card);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5); 
        }
        .card:hover { 
            transform: translateY(-5px); 
            border-color: var(--accent); 
        }
        .card h3 { 
            font-size: 22px; 
            margin-bottom: 12px; 
            font-weight: 700;
        }
        .card p { 
            color: var(--text-muted); 
            margin-bottom: 32px; 
            line-height: 1.6; 
            font-size: 16px;
        }
        
        /* BOTÕES 100% CLICÁVEIS */
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
            letter-spacing: 0.5px;
            cursor: pointer;
            width: max-content; 
        }

        .btn:hover { 
            background-color: var(--accent-hover); 
            transform: scale(1.02); 
            box-shadow: var(--shadow-neon); 
        }

        /* RODAPÉ ALINHADO AO FUNDO */
        footer { 
            margin-top: auto; /* Empurra o rodapé para o fim da tela */
            padding: 50px 0; 
            border-top: 1px solid var(--border-card);
            text-align: center; 
        }
        footer p { 
            color: var(--text-muted); 
            font-size: 15px; 
        }
        
        /* Imagem SVG Reservada (Descomentar e usar se preferir trocar o texto por SVG depois) */
        /*
        .logo-img {
            height: 32px;
            width: auto;
            display: block;
        }
        */
    </style>
</head>
<body>

    <header>
        <div class="container">
            <a href="/" class="logo-container">
                <span class="hl">Renê</span> <span>Sábio</span>
            </a>
            
            </div>
    </header>

    <main class="container">
        <section class="hero">
            <h1>Tração e Receita.</h1>
            <p>Sou <strong>Especialista em Inbound Marketing</strong> focado na orquestração de ecossistemas completos. Estruturo operações analíticas de aquisição previsível, integrando consolidação de dados e processos comerciais escaláveis para o mercado B2B.</p>
        </section>

        <section class="cards-grid">
            <div class="card">
                <h3>Visão Analítica</h3>
                <p>Acompanhe as minhas análises sobre estratégias de aquisição, inteligência de dados e estruturação de funis de alta performance.</p>
                <a href="URL_DO_SEU_LINKEDIN_AQUI" class="btn" target="_blank" rel="noopener">Conectar no LinkedIn</a>
            </div>

            <div class="card">
                <h3>Inbound Hub</h3>
                <p>A consolidação da estratégia. Um ecossistema dedicado para profissionais que vivem as trincheiras da aquisição previsível.</p>
                <a href="URL_DA_COMUNIDADE_AQUI" class="btn" target="_blank" rel="noopener">Conhecer a Comunidade</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2026 Renê Sábio. Estruturação de ecossistemas de Inbound Marketing e RevOps.</p>
        </div>
    </footer>

</body>
</html>
