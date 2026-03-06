<?php include 'header.php'; ?>

    <style>
        .form-page { padding: 80px 0; background-color: var(--bg-alt); min-height: calc(100vh - 80px); }
        .form-header { margin-bottom: 48px; text-align: center; }
        .form-header h1 { font-size: 40px; margin-bottom: 16px; }
        .form-header p { color: var(--text-muted); font-size: 18px; max-width: 650px; margin: 0 auto; }
        
        .section-title { font-size: 20px; color: var(--accent); margin: 48px 0 24px; border-bottom: 1px solid var(--border-light); padding-bottom: 12px;}

        .back-link { display: inline-flex; align-items: center; color: var(--text-muted); font-weight: 500; margin-bottom: 40px; font-size: 15px; transition: color 0.2s;}
        .back-link:hover { color: var(--accent); }
    </style>

    <main class="form-page">
        <div class="container">
            <a href="index.php" class="back-link">← Voltar para o início</a>
            
            <div class="form-container">
                <div class="form-header">
                    <h1>Raio-X de Inbound e RevOps</h1>
                    <p>Diagnóstico focado para empresas que já possuem uma operação, mas precisam escalar com previsibilidade, alinhando marketing e vendas.</p>
                </div>

                <form action="https://formsubmit.co/rene.sabio@hotmail.com" method="POST">
                    <input type="hidden" name="_subject" value="Novo Raio-X - Escala e RevOps">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <!-- Altere o value abaixo para a URL do seu site -->
                    <input type="hidden" name="_next" value="https://seusite.com.br">

                    <h3 class="section-title">1. Dados Básicos</h3>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">Seu Nome</label>
                            <input type="text" name="Nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Empresa</label>
                            <input type="text" name="Empresa" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="form-label">E-mail Corporativo</label>
                            <input type="email" name="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">WhatsApp</label>
                            <input type="tel" name="Celular" class="form-control" required>
                        </div>
                    </div>

                    <h3 class="section-title">2. Maturidade da Operação</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Você tem clareza de quanto custa trazer um novo cliente hoje? <span>Conhecido como Custo de Aquisição de Clientes (CAC)</span></label>
                        <select name="Sabe_CAC" class="form-control" required>
                            <option value="" disabled selected>Selecione...</option>
                            <option value="Sim, exato">Sim, temos esse dado mapeado com precisão no sistema.</option>
                            <option value="Temos uma base">Temos uma noção aproximada, mas o número não é exato.</option>
                            <option value="Não fazemos ideia">Sinceramente, não fazemos ideia de quanto nos custa um cliente.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">O que acontece hoje com um potencial cliente que pergunta, mas não compra na hora?</label>
                        <select name="Processo_Lead" class="form-control" required>
                            <option value="" disabled selected>Selecione o cenário mais comum...</option>
                            <option value="Nutrição Inbound">Ele entra em um fluxo automático de e-mails/conteúdos para ser nutrido.</option>
                            <option value="Follow-up Manual">A equipe de vendas anota para tentar contatar de novo depois.</option>
                            <option value="Fica esquecido">Basicamente a conversa esfria e o contato fica perdido no WhatsApp.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">O Marketing e as Vendas olham para o mesmo lugar na sua empresa?</label>
                        <select name="Alinhamento" class="form-control" required>
                            <option value="" disabled selected>Selecione...</option>
                            <option value="CRM Unificado">Sim, todos usam o mesmo sistema CRM com métricas conectadas.</option>
                            <option value="Ferramentas Separadas">Não, o marketing usa uma plataforma e vendas usa planilhas/outro sistema.</option>
                            <option value="Desconectados">Totalmente desconectados. Marketing só passa o contato e vendas se vira.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Sabe se o cliente compra mais de uma vez com você ao longo dos anos? <span>Conhecido como Lifetime Value (LTV)</span></label>
                        <select name="Sabe_LTV" class="form-control" required>
                            <option value="" disabled selected>Selecione...</option>
                            <option value="Sim, acompanhamos">Sim, temos programas ou controle de recompra e retenção.</option>
                            <option value="Não acompanhamos">Não, focamos quase 100% apenas na primeira venda.</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Qual é o principal problema que o impede de faturar mais hoje?</label>
                        <textarea name="Desafio" class="form-control" required placeholder="Ex: Os leads do tráfego pago estão muito ruins, ou a equipe de vendas está perdendo o controle das conversas no WhatsApp..."></textarea>
                    </div>

                    <button type="submit" class="btn-main" style="width: 100%; padding: 20px; font-size: 18px; margin-top: 16px;">Enviar Raio-X para Diagnóstico</button>
                </form>
            </div>
        </div>
    </main>

<?php include 'footer.php'; ?>
