<?php include 'header.php'; ?>

    <style>
        .hero { padding: 80px 0 60px; }
        .hero h1 { font-size: 56px; line-height: 1.1; margin-bottom: 24px; letter-spacing: -2px; }
        .hero p { font-size: 18px; line-height: 1.6; margin-bottom: 24px; max-width: 800px;}
        
        .section-title { font-size: 32px; margin-bottom: 40px; border-bottom: 2px solid var(--border-card); padding-bottom: 10px;}

        .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 80px; }
        .card { 
            background-color: var(--bg-card); 
            padding: 40px; 
            border-radius: 12px; 
            border: 1px solid var(--border-card);
        }
        .card h3 { font-size: 22px; margin-bottom: 16px; }
        .card p { margin-bottom: 0; font-size: 15px; line-height: 1.6; }

        @media (max-width: 768px) {
            .hero h1 { font-size: 40px; }
        }
    </style>

    <main class="container">
        <section class="hero" id="historia">
            <h1>Lógica de sistemas.<br>Estratégia de marketing.<br>Foco em <strong>receita.</strong></h1>
            
            <p>A minha jornada não começou no marketing. A intenção inicial era atuar com tecnologia, o que me levou a cursar Sistemas de Informação. Mas, entre os códigos e o trabalho, as oportunidades para criar sites, logos e blogs começaram a surgir com frequência. Foi nesse momento que percebi o meu caminho e fiz a transição para Propaganda e Marketing.</p>
            
            <p>Passei bastante tempo nas trincheiras operacionais, criando campanhas online e offline, muito focado em design, eventos e relações públicas. No entanto, o digital sempre foi o meu ecossistema natural. Para unir a criatividade à análise de dados, fui buscar uma especialização em Marketing e Mídias Digitais na FGV.</p>
        </section>

        <section id="atuacao">
            <h2 class="section-title">O que faço hoje</h2>
            <div class="cards-grid">
                <div class="card">
                    <h3>Operação de Receita B2B</h3>
                    <p>Atualmente, trabalho no maior ecossistema de planejamento financeiro do país. A minha missão diária é operar a máquina de <strong>atração, nutrição e fidelização de leads</strong> dentro do CRM. Utilizo os princípios de RevOps para otimizar funis, reduzir atritos e garantir que as equipas comerciais recebam oportunidades qualificadas.</p>
                </div>
                <div class="card">
                    <h3>Construção de Negócios Digitais</h3>
                    <p>Em paralelo, ajudo empresários a materializarem as suas empresas no ambiente online. Atuo na construção de <strong>marcas digitais do zero</strong>: desde a concepção do logo, desenvolvimento do site e e-mails profissionais, até à estruturação da apresentação comercial e implementação do CRM para gerir as vendas.</p>
                </div>
            </div>
        </section>

        <section id="comunidade" style="padding-bottom: 80px;">
            <div class="card" style="border-color: var(--accent); background: linear-gradient(145deg, #0F0F0F, #1a100a);">
                <h3 style="color: var(--accent); font-size: 28px;">Inbound Hub</h3>
                <p style="font-size: 18px;">Acredito no crescimento partilhado. Por isso, criei a comunidade <strong>Inbound Hub</strong>. É um espaço dedicado onde profissionais de marketing e empresários se reúnem para aprender, trocar experiências e, acima de tudo, executar projetos de Inbound Marketing com um único foco: <strong>geração de receita previsível.</strong></p>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
