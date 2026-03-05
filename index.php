<?php include 'header.php'; ?>

    <style>
        .hero { padding: 80px 0 60px; text-align: center; }
        .hero h1 { font-size: 52px; line-height: 1.1; margin-bottom: 20px; letter-spacing: -2px; }
        .hero p { font-size: 18px; color: var(--text-muted); line-height: 1.6; max-width: 700px; margin: 0 auto; }
        
        .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 80px; }
        .card { 
            background-color: var(--bg-card); 
            padding: 40px; 
            border-radius: 12px; 
            border: 1px solid var(--border-light);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .card:hover { border-color: var(--accent); transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05); }
        .card h3 { font-size: 24px; margin-bottom: 12px; }
        .card p { margin-bottom: 32px; font-size: 15px; line-height: 1.6; color: var(--text-muted); flex-grow: 1; }
    </style>

    <main class="container">
        <section class="hero">
            <h1>Lógica, design e dados para orquestrar receita.</h1>
            <p>Atuo na estruturação de ecossistemas de atração e fidelização online. A minha jornada une a lógica dos Sistemas de Informação ao poder de atração do Marketing, materializando-se hoje na orquestração de operações B2B via <strong>Inbound Marketing, CRM e RevOps</strong>.</p>
        </section>

        <section class="cards-grid">
            <div class="card">
                <h3>Criar uma Marca Online</h3>
                <p>Vai começar o seu projeto digital e não sabe do que precisa? Preencha o briefing rápido e descubra se a sua empresa necessita de um site, identidade visual, redes sociais ou da estrutura completa.</p>
                <a href="construir-marca.php" class="btn">Preencher Briefing</a>
            </div>

            <div class="card">
                <h3>Raio-X de Inbound</h3>
                <p>A sua empresa já está no digital mas as vendas não estão a escalar? Faça o diagnóstico da sua operação e descubra o nível de maturidade dos seus funis, CRM e alinhamento de marketing e vendas.</p>
                <a href="raio-x-inbound.php" class="btn">Fazer o Raio-X</a>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
