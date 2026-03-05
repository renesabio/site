<?php include 'header.php'; ?>

    <style>
        /* Estilos da Seção Hero */
        .hero {
            padding: 200px 0 100px; /* Padding superior maior para o header fixo */
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--cor-texto-principal);
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--cor-texto-secundario);
            margin-bottom: 3rem;
        }

        .hero-subtitle span {
            font-weight: 700;
            color: var(--cor-acento);
        }

        /* Botões Genericamente Estilizados */
        .btn {
            display: inline-block;
            padding: 15px 35px;
            background-color: var(--cor-acento);
            color: var(--cor-fundo);
            font-weight: 700;
            text-decoration: none;
            border-radius: 30px;
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
            border: none;
        }

        .btn:hover {
            background-color: var(--cor-acento-hover);
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(1px);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--cor-texto-principal);
            border: 2px solid var(--cor-borda);
        }

        .btn-outline:hover {
            background-color: rgba(168, 173, 182, 0.1);
            border-color: rgba(168, 173, 182, 0.2);
            color: var(--cor-texto-principal);
        }

        /* Seção de Serviços/Pilares */
        .servicos {
            padding: 100px 0;
            background-color: var(--cor-fundo-alt);
        }

        .secao-titulo {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--cor-texto-principal);
            text-align: center;
            margin-bottom: 4rem;
        }

        .pilares-wrap {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .pilar-item {
            background-color: rgba(26, 30, 38, 0.5); /* Semi-transparente para profundidade 'glassmorphism' */
            padding: 40px;
            border-radius: 15px;
            border: 1px solid var(--cor-borda);
            text-align: center;
            transition: transform 0.3s, border-color 0.3s;
        }

        .pilar-item:hover {
            transform: translateY(-5px);
            border-color: rgba(168, 173, 182, 0.2);
        }

        .pilar-icon {
            font-size: 3rem;
            color: var(--cor-acento);
            margin-bottom: 1.5rem;
        }

        .pilar-titulo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--cor-texto-principal);
            margin-bottom: 1rem;
        }

        .pilar-texto {
            color: var(--cor-texto-secundario);
            font-size: 1rem;
            margin: 0;
        }

        /* Seção Sobre Mim */
        .sobre {
            padding: 100px 0;
        }
        .sobre-content {
            display: flex;
            gap: 50px;
            align-items: center;
        }
        .sobre-texto {
            flex: 1;
        }
        .sobre-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--cor-texto-principal);
            margin-bottom: 1rem;
        }
        .sobre-sub {
            font-size: 1.2rem;
            color: var(--cor-acento);
            font-weight: 600;
            margin-bottom: 2rem;
        }
        .sobre-paragrafo {
            color: var(--cor-texto-secundario);
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
        /* Seção Contato */
        .contato {
            padding: 100px 0;
            background-color: var(--cor-fundo-alt);
            text-align: center;
        }
        .contato-wrap {
            max-width: 700px;
            margin: 0 auto;
            background-color: var(--cor-fundo);
            padding: 60px;
            border-radius: 20px;
            border: 1px solid var(--cor-borda);
        }
        
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
            .hero-subtitle { font-size: 1.2rem; }
            .pilares-wrap { grid-template-columns: 1fr; }
            .sobre-content { flex-direction: column; }
        }
    </style>

    <main>
        <section class="hero">
            <div class="container">
                <h1 class="hero-title">A unificação perfeita para orquestrar sua receita e alavancar o crescimento</h1>
                <p class="hero-subtitle">Estratégias escaláveis de <span>Inbound Marketing</span>, <span>CRM</span> e <span>RevOps</span> para resultados previsíveis.</p>
                <a href="#contato" class="btn">Agendar uma conversa</a>
                <a href="#servicos" class="btn btn-outline" style="margin-left: 15px;">Conheça meus pilares</a>
            </div>
        </section>

        <section id="servicos" class="servicos">
            <div class="container">
                <h2 class="secao-titulo">Sua Máquina de Receita Precisamente Alinhada</h2>
                <div class="pilares-wrap">
                    <div class="pilar-item">
                        <div class="pilar-icon">🌱</div> <h3 class="pilar-titulo">Inbound Marketing</h3>
                        <p class="pilar-texto">Atração qualificada, nutrição inteligente e conversão consistente. Criamos jornadas de compra que geram leads qualificados e prontos para vendas.</p>
                    </div>
                    <div class="pilar-item">
                        <div class="pilar-icon">⚙️</div>
                        <h3 class="pilar-titulo">CRM & Gestão de Leads</h3>
                        <p class="pilar-texto">Implementação e otimização de CRM para uma visão 360º. Automatizamos processos para maximizar o LTV e otimizar cada interação.</p>
                    </div>
                    <div class="pilar-item">
                        <div class="pilar-icon">📈</div>
                        <h3 class="pilar-titulo">RevOps (Revenue Operations)</h3>
                        <p class="pilar-texto">Alinhamento estratégico e operacional entre Marketing, Vendas e Customer Success. Removemos atritos e otimizamos todo o ciclo de vida do cliente.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="sobre" class="sobre">
            <div class="container">
                <div class="sobre-content">
                    <div class="sobre-texto">
                        <h2 class="sobre-title">Eu ajudo sua empresa a parar de perder dinheiro por desalinhamento operacional.</h2>
                        <p class="sobre-sub">Unificando Processos, Tecnologia e Dados.</p>
                        <p class="sobre-paragrafo">Sou apaixonado por resultados e viciado em dados. Como especialista em Inbound Marketing, CRM e RevOps, trago uma visão estratégica e prática para unificar os departamentos que geram receita em sua organização. Meu objetivo é criar máquinas de vendas previsíveis e escaláveis, focadas na experiência do cliente e na otimização operacional contínua.</p>
                        <a href="#contato" class="btn">Vamos conversar sobre seus desafios?</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contato" class="contato">
            <div class="container">
                <div class="contato-wrap">
                    <h2 class="secao-titulo">Pronto para transformar sua operação de receita?</h2>
                    <p class="sobre-paragrafo">Vamos conversar sobre como Inbound, CRM e RevOps podem trabalhar juntos para acelerar seu crescimento. Agende uma consulta gratuita de 30 minutos.</p>
                    <a href="#" class="btn btn-outline" style="margin-top: 20px;">Agendar consulta no Calendly</a> </div>
            </div>
        </section>

    </main>

<?php include 'footer.php'; ?>
