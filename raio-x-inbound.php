<?php include 'header.php'; ?>

    <main class="container" style="padding: 60px 24px; text-align: center; max-width: 700px;">
        <h1 style="font-size: 40px; margin-bottom: 16px;">Raio-X da Operação Digital</h1>
        <p style="color: var(--text-muted); margin-bottom: 40px; font-size: 16px;">Descubra se a sua máquina de vendas está afinada ou se está a desperdiçar leads por falta de alinhamento em Inbound e RevOps.</p>

        <div id="raiox-box" style="background: var(--bg-card); padding: 40px; border-radius: 12px; border: 1px solid var(--border-light);">
            
            <div class="form-group">
                <label class="form-label">1. Sabe exatamente o Custo de Aquisição (CAC) e o Retorno (ROI) das suas campanhas?</label>
                <select id="rx1" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="nao">Não faço ideia ou é um cálculo incerto.</option>
                    <option value="sim">Sim, os dados estão claros no painel.</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">2. O que acontece com um lead que entra e não compra de imediato?</label>
                <select id="rx2" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="perde">Fica esquecido / O vendedor desiste.</option>
                    <option value="nutricao">Entra num fluxo de nutrição de e-mails automatizado.</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">3. As equipas de Marketing e Vendas usam o mesmo sistema e partilham metas?</label>
                <select id="rx3" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="separados">Não, trabalham de forma totalmente separada.</option>
                    <option value="alinhados">Sim, operamos sob a mesma fonte de dados (CRM unificado).</option>
                </select>
            </div>

            <button onclick="gerarResultadoRaioX()" class="btn" style="width: 100%; margin-top: 20px;">Processar Raio-X</button>
        </div>

        <div id="resultado-raiox-box" style="display: none; background: #EEF2FF; padding: 40px; border-radius: 12px; border: 1px solid var(--accent); margin-top: 40px; text-align: left;">
            <h3 style="color: var(--accent); margin-bottom: 16px;">Diagnóstico da Operação</h3>
            <p id="resultado-raiox-texto" style="color: var(--text-dark); font-size: 16px; line-height: 1.6; font-weight: 500;"></p>
        </div>
    </main>

    <script>
        function gerarResultadoRaioX() {
            const rx1 = document.getElementById('rx1').value;
            const rx2 = document.getElementById('rx2').value;
            const rx3 = document.getElementById('rx3').value;
            
            if(!rx1 || !rx2 || !rx3) {
                alert("Preencha todas as opções para o diagnóstico.");
                return;
            }

            let score = 0;
            if (rx1 === 'sim') score++;
            if (rx2 === 'nutricao') score++;
            if (rx3 === 'alinhados') score++;

            let resultado = "";

            if (score === 0) {
                resultado = "<strong>Alerta Vermelho: Ruptura Operacional.</strong> A sua empresa está a gerar tráfego às escuras. O facto de marketing e vendas estarem separados e não existir nutrição significa que está a deitar dinheiro fora com leads que não convertem no primeiro dia. Necessita de uma intervenção urgente de RevOps para alinhar os departamentos e instalar o básico de Inbound Marketing.";
            } else if (score === 1 || score === 2) {
                resultado = "<strong>Sinal Amarelo: Fugas no Funil.</strong> A sua operação existe, mas possui vazamentos graves de receita. Alguns processos já estão mapeados, mas a falta de integração total entre automação, CRM e análise de dados (CAC/ROI) impede que o negócio escale de forma previsível. O foco aqui é auditoria de CRM e otimização de fluxos de Inbound.";
            } else {
                resultado = "<strong>Sinal Verde: Operação Madura.</strong> A sua máquina está muito bem alinhada. O Marketing atrai, o CRM nutre e as Vendas fecham sob os mesmos dados (RevOps sólido). O seu próximo nível não é criar, mas sim escalar orçamentos com análises preditivas avançadas de retenção (LTV).";
            }

            document.getElementById('raiox-box').style.display = 'none';
            document.getElementById('resultado-raiox-texto').innerHTML = resultado;
            document.getElementById('resultado-raiox-box').style.display = 'block';
        }
    </script>

<?php include 'footer.php'; ?>
