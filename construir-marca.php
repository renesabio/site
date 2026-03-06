<?php include 'header.php'; ?>

    <style>
        .form-page { padding: 80px 0; background-color: var(--bg-alt); min-height: calc(100vh - 80px); }
        .form-header { margin-bottom: 48px; text-align: center; }
        .form-header h1 { font-size: 40px; margin-bottom: 16px; }
        .form-header p { color: var(--text-muted); font-size: 18px; max-width: 600px; margin: 0 auto; }
        
        .section-title { font-size: 20px; color: var(--accent); margin: 48px 0 24px; border-bottom: 1px solid var(--border-light); padding-bottom: 12px;}
        
        .checkbox-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 12px; }
        .checkbox-item { display: flex; align-items: center; gap: 12px; font-size: 15px; color: var(--text-dark); background: #f8fafc; padding: 12px 16px; border-radius: 8px; border: 1px solid var(--border-light); cursor: pointer; transition: all 0.2s;}
        .checkbox-item:hover { border-color: var(--accent); background: #fff; }
        .checkbox-item input[type="checkbox"] { width: 18px; height: 18px; accent-color: var(--accent); cursor: pointer; }

        .back-link { display: inline-flex; align-items: center; color: var(--text-muted); font-weight: 500; margin-bottom: 40px; font-size: 15px; transition: color 0.2s;}
        .back-link:hover { color: var(--accent); }
    </style>

    <main class="form-page">
        <div class="container">
            <a href="index.php" class="back-link">← Voltar para o início</a>
            
            <div class="form-container">
                <div class="form-header">
                    <h1>Briefing de Construção Digital</h1>
                    <p>Me ajude a entender o momento da sua empresa para desenharmos a estrutura inicial da sua operação online.</p>
                </div>

                <form action="https://formsubmit.co/rene.sabio@hotmail.com" method="POST">
                    <input type="hidden" name="_subject" value="Novo Briefing - Construção Digital">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <!-- Altere o value abaixo para a URL do seu site, para onde o cliente volta após enviar -->
                    <input type="hidden" name="_next" value="https://seusite.com.br"> 

                    <h3 class="section-title">1. Dados de Contato</h3>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">Seu Nome</label>
                            <input type="text" name="Nome" class="form-control" required placeholder="Como gosta de ser chamado?">
                        </div>
                        <div class="form-group">
                            <label class="form-label">E-mail Corporativo</label>
                            <input type="email" name="Email" class="form-control" required placeholder="seu@email.com.br">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">WhatsApp</label>
                            <input type="tel" name="Celular" class="form-control" required placeholder="(11) 90000-0000">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nome do Negócio</label>
                            <input type="text" name="Empresa" class="form-control" required placeholder="Nome da Empresa">
                        </div>
                    </div>

                    <h3 class="section-title">2. Estrutura Atual</h3>
                    <div class="form-group">
                        <label class="form-label">O negócio já existe de forma oficial?</label>
                        <select name="Momento_Negocio" class="form-control" required>
                            <option value="" disabled selected>Selecione seu momento atual...</option>
                            <option value="Ainda é apenas uma ideia">Ainda é apenas uma ideia / Saindo do papel</option>
                            <option value="Já existe offline">Já existimos fisicamente, mas sem presença digital</option>
                            <option value="Já atua no digital">Já atuamos no digital de alguma forma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">O que você já possui bem estruturado hoje? <span>(Marque todas as opções que possuir)</span></label>
                        <div class="checkbox-grid">
                            <label class="checkbox-item"><input type="checkbox" name="Possui[]" value="Logo Profissional"> Logo e Identidade Visual</label>
                            <label class="checkbox-item"><input type="checkbox" name="Possui[]" value="Site/Landing Page"> Site ou Landing Page</label>
                            <label class="checkbox-item"><input type="checkbox" name="Possui[]" value="Redes Sociais"> Redes Sociais ativas</label>
                            <label class="checkbox-item"><input type="checkbox" name="Possui[]" value="Apresentação Comercial"> Apresentação Comercial (PDF)</label>
                        </div>
                    </div>

                    <h3 class="section-title">3. Atração e Prazos</h3>
                    <div class="form-group">
                        <label class="form-label">Como você pretende iniciar a atração de clientes?</label>
                        <select name="Atracao_Clientes" class="form-control" required>
                            <option value="" disabled selected>Escolha o canal principal...</option>
                            <option value="Conteúdo Orgânico">Produzindo conteúdo (Redes Sociais / Blog)</option>
                            <option value="Tráfego Pago">Anúncios (Google Ads / Meta Ads)</option>
                            <option value="Prospecção Ativa">Prospecção Ativa (Mensagens / Ligações)</option>
                            <option value="Ainda não sei">Ainda não sei, preciso de ajuda com isso</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Qual é o nível de urgência da sua operação?</label>
                        <select name="Urgencia" class="form-control" required>
                            <option value="" disabled selected>Selecione o prazo ideal...</option>
                            <option value="Alta (1 mês)">Alta urgência! Preciso iniciar a operação em até 1 mês.</option>
                            <option value="Média (2-3 meses)">Média. Temos um prazo de 2 a 3 meses para estruturar.</option>
                            <option value="Baixa (Longo Prazo)">Baixa. Queremos planejar tudo com calma, sem pressa.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Me conte os detalhes do seu objetivo final:</label>
                        <textarea name="Detalhes" class="form-control" placeholder="Ex: Vamos abrir uma clínica médica no mês que vem e precisamos ter uma marca forte, um site para agendamentos e uma campanha inicial rodando..."></textarea>
                    </div>

                    <button type="submit" class="btn-main" style="width: 100%; padding: 20px; font-size: 18px; margin-top: 16px;">Enviar Briefing para Análise</button>
                </form>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>
