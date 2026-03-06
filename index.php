<?php include 'header.php'; ?>

    <style>
        /* ================= HERO SECTION ================= */
        .hero { padding: 120px 0; background-color: var(--bg-light); display: flex; align-items: center; }
        .hero-content { max-width: 850px; }
        .hero-badge { display: inline-block; background: rgba(255, 102, 0, 0.1); color: var(--accent); padding: 6px 16px; border-radius: 999px; font-weight: 600; font-size: 13px; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 24px; }
        .hero h1 { font-size: 64px; line-height: 1.05; margin-bottom: 24px; letter-spacing: -0.04em; }
        .hero h1 span { color: var(--accent); }
        .hero p { font-size: 20px; color: var(--text-muted); line-height: 1.6; margin-bottom: 40px; max-width: 700px; }

        @media (max-width: 768px) {
            .hero { padding: 80px 0; }
            .hero h1 { font-size: 44px; }
        }

        /* ================= AUTORIDADE ================= */
        .authority-section { padding: 100px 0; background-color: var(--bg-alt); border-top: 1px solid var(--border-light); border-bottom: 1px solid var(--border-light); }
        .auth-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: start; }
        .auth-content h2 { font-size: 40px; margin-bottom: 32px; line-height: 1.1; }
        .auth-content p { font-size: 17px; color: var(--text-muted); line-height: 1.7; margin-bottom: 24px; }
        
        .auth-box { background: #fff; padding: 48px; border-radius: 16px; border: 1px solid var(--border-light); box-shadow: 0 20px 40px -10px rgba(0,0,0,0.05); }
        .auth-box h3 { font-size: 24px; margin-bottom: 20px; color: var(--text-dark); }
        .auth-box p { color: var(--text-muted); line-height: 1.6; margin-bottom: 20px; font-size: 16px; }
        
        @media (max-width: 900px) { .auth-grid { grid-template-columns: 1fr; gap: 56px;} }

        /* ================= FERRAMENTAS & CARDS ================= */
        .tools-section { padding: 120px 0; background-color: var(--bg-light); }
        .section-header { margin-bottom: 64px; }
        .section-header h2 { font-size: 40px; margin-bottom: 16px; }
        .section-header p { color: var(--text-muted); font-size: 20px; max-width: 600px; }

        .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; }
        
        .card { 
            background-color: #fff; padding: 48px; border-radius: 16px; 
            border: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: flex-start;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card:hover { border-color: var(--accent); transform: translateY(-4px); box-shadow: 0 20px 40px -10px rgba(255, 102, 0, 0.1); }
        
        .card-icon { width: 48px; height: 48px; background: rgba(255, 102, 0, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; color: var(--accent); font-size: 24px;}
        .card h3 { font-size: 24px; margin-bottom: 16px; }
        .card p { margin-bottom: 40px; font-size: 16px; line-height: 1.6; color: var(--text-muted); flex-grow: 1; }
        
        /* Inbound Hub Banner */
        .card-hub { 
            grid-column: 1 / -1; 
            background: var(--hub-indigo);
            border: none;
            flex-direction: row; align-items: center; gap: 60px;
            padding: 56px 64px;
        }
        .card-hub:hover { border: none; transform: translateY(-4px); box-shadow: 0 20px 40px -10px rgba(49, 46, 129, 0.4); }
        .hub-content { flex: 1; }
        .card-hub h3 { font-size: 36px; color: #fff; margin-bottom: 16px; font-family: 'Space Grotesk', sans-serif;}
        .card-hub p { color: var(--hub-light); margin-bottom: 0; font-size: 18px; line-height: 1.6;}
        
        .btn-hub { background-color: #fff; color: var(--hub-indigo) !important; box-shadow: none; white-space: nowrap;}
        .btn-hub:hover { background-color: var(--hub-light); box-shadow: 0 4px 12px rgba(0,0,0,0.1); transform: translateY(-2px);}

        @media (max-width: 900px) {
            .card-hub { flex-direction: column; padding: 40px; gap: 32px; align-items: flex-start; }
            .btn-hub { width: 100%; }
        }
    </style>

    <main>
        <section class="hero">
            <div class="container hero-content">
                <span class="hero-badge">Consultoria Estratégica B2B</span>
                <h1>Sua empresa precisa de uma <span>máquina de receita</span>, não de mais uma campanha.</h1>
                <p>Muitos negócios têm produtos excelentes, mas falham na aquisição e retenção. Eu estruturo ecossistemas digitais que transformam desconhecidos em clientes previsíveis através de Inbound Marketing e RevOps.</p>
                <a href="#ferramentas" class="btn-main">Analisar o Meu Negócio</a>
            </div>
        </section>

        <section class="authority-section">
            <div class="container auth-grid">
                <div class="auth-content">
                    <h2>Da lógica de sistemas à engenharia de vendas.</h2>
                    <p>Meu caminho começou em Sistemas de Informação, o que me ensinou a pensar em processos, fluxos e automações. Depois de mudar de área, trabalhei durante anos com marketing generalista, com forte atuação em gestão, design e eventos.</p>
                    <p>Apesar da bagagem criativa e tática, foi quando uni a lógica dos sistemas com o marketing que me encontrei de verdade: no <strong>Inbound Marketing, CRM e RevOps.</strong></p>
                    <p>Hoje, meu foco como consultor é ajudar sua empresa a parar de perder dinheiro por desalinhamento operacional. Atuo operando a máquina de atração, nutrição e fidelização dentro do CRM, integrando de verdade quem atrai o lead e quem fecha a venda.</p>
                </div>
                
                <div class="auth-box">
                    <h3>O gargalo invisível</h3>
                    <p>O Marketing diz: <i>"Os leads não convertem."</i><br>As Vendas dizem: <i>"Os leads são desqualificados."</i></p>
                    <p>Sem um processo desenhado e um fluxo de nutrição (Inbound), sua empresa continuará queimando orçamento em tráfego sem previsibilidade de retorno.</p>
                    <a href="https://wa.me/5511939009202?text=Ol%C3%A1%2C%20vim%20pelo%20seu%20site%20e%20gostaria%20de%20conversar." target="_blank" style="color: var(--accent); font-weight: 700; font-size: 16px; text-decoration: none; margin-top: 8px; display: inline-block; transition: opacity 0.2s;">Vamos resolver isso? →</a>
                </div>
            </div>
        </section>

        <section id="ferramentas" class="tools-section">
            <div class="container">
                <div class="section-header">
                    <h2>Qual é o seu momento?</h2>
                    <p>Escolha a ferramenta que melhor descreve o desafio atual da sua empresa para um diagnóstico preciso.</p>
                </div>
                
                <div class="cards-grid">
                    <div class="card">
                        <div class="card-icon">🏗️</div>
                        <h3>Construir uma Marca</h3>
                        <p>Vai iniciar seu projeto digital ou precisa profissionalizar a operação atual? Preencha o briefing para estruturarmos sua base: da identidade do negócio aos canais de atração de clientes.</p>
                        <a href="construir-marca.php" class="btn-main" style="width: 100%;">Preencher Briefing</a>
                    </div>

                    <div class="card">
                        <div class="card-icon">📈</div>
                        <h3>Escalar a Operação</h3>
                        <p>Já investe em marketing mas o CAC está alto e as vendas não fecham? Faça o Raio-X da operação de Inbound e RevOps para identificarmos os vazamentos do seu funil.</p>
                        <a href="raio-x.php" class="btn-main" style="width: 100%;">Fazer Raio-X</a>
                    </div>

                    <div class="card card-hub">
                        <div class="hub-content">
                            <h3>Inbound<span style="opacity: 0.7; font-weight: 400;">Hub</span></h3>
                            <p>Sou o criador do Inbound Hub, uma comunidade dedicada a empresários e profissionais que buscam aprender e executar projetos reais de Inbound Marketing com foco em gerar receita.</p>
                        </div>
                        <a href="https://inboundhub.com.br/" target="_blank" rel="noopener" class="btn-main btn-hub">Acessar Comunidade</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
