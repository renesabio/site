<?php include 'header.php'; ?>

    <main class="container" style="padding: 60px 24px; text-align: center; max-width: 700px;">
        <h1 style="font-size: 40px; margin-bottom: 16px;">Briefing de Presença Online</h1>
        <p style="color: var(--text-muted); margin-bottom: 40px; font-size: 16px;">Responda a estas 3 questões rápidas para descobrir exatamente qual a infraestrutura digital que a sua empresa precisa hoje.</p>

        <div id="briefing-box" style="background: var(--bg-card); padding: 40px; border-radius: 12px; border: 1px solid var(--border-light);">
            
            <div class="form-group">
                <label class="form-label">1. A sua empresa já possui Logótipo e Identidade Visual profissional?</label>
                <select id="q1" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="nao">Não, estamos a começar do zero.</option>
                    <option value="sim">Sim, já temos uma marca definida.</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">2. Qual é a sua forma principal de atrair clientes hoje?</label>
                <select id="q2" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="boca">Indicações e boca a boca.</option>
                    <option value="redes">Apenas pelo Instagram/WhatsApp.</option>
                    <option value="anuncios">Já fazemos anúncios online.</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">3. Como gere os seus contactos e vendas?</label>
                <select id="q3" class="form-select">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="papel">Caderno, cabeça ou Excel básico.</option>
                    <option value="crm">Já utilizo um sistema de CRM organizado.</option>
                </select>
            </div>

            <button onclick="gerarResultadoBriefing()" class="btn" style="width: 100%; margin-top: 20px;">Analisar a Minha Marca</button>
        </div>

        <div id="resultado-box" style="display: none; background: #EEF2FF; padding: 40px; border-radius: 12px; border: 1px solid var(--accent); margin-top: 40px; text-align: left;">
            <h3 style="color: var(--accent); margin-bottom: 16px;">O Seu Diagnóstico</h3>
            <p id="resultado-texto" style="color: var(--text-dark); font-size: 16px; line-height: 1.6; font-weight: 500;"></p>
            <p style="margin-top: 24px; color: var(--text-muted); font-size: 15px;">Quer construir esta estrutura de forma profissional e orientada para a receita? Vamos conversar.</p>
        </div>
    </main>

    <script>
        function gerarResultadoBriefing() {
            const q1 = document.getElementById('q1').value;
            const q2 = document.getElementById('q2').value;
            const q3 = document.getElementById('q3').value;
            
            if(!q1 || !q2 || !q3) {
                alert("Por favor, preencha todas as questões para um resultado preciso.");
                return;
            }

            let resultado = "";

            if (q1 === 'nao') {
                resultado += "Como ainda não tem uma identidade visual, o seu projeto tem de começar pela <strong>Base de Branding</strong> (criação de logótipo e identidade). Sem isso, não há como construir confiança na internet. ";
            } else {
                resultado += "Com a identidade visual já definida, metade do caminho de branding está feito. ";
            }

            if (q2 === 'boca' || q2 === 'redes') {
                resultado += "Depender apenas de indicações ou redes sociais limita o seu crescimento. Precisa de uma <strong>Presença Digital Oficial (Website Corporativo e Landing Pages)</strong> para captar pesquisas no Google e transmitir autoridade. ";
            }

            if (q3 === 'papel') {
                resultado += "E o mais crítico: como gere vendas em cadernos ou Excel, está a perder dinheiro todos os dias. A sua prioridade é implementar um <strong>CRM Básico</strong> atrelado ao site para automatizar a captação e follow-up de potenciais clientes.";
            } else if (q3 === 'crm' && q1 === 'sim' && q2 === 'anuncios') {
                resultado += "A sua base estrutural já existe! O seu foco não é mais 'construir', mas sim 'escalar'. O seu próximo passo deve ser uma operação de <strong>Inbound Marketing e RevOps</strong> para unificar a inteligência do seu CRM com os seus anúncios.";
            }

            document.getElementById('briefing-box').style.display = 'none';
            document.getElementById('resultado-texto').innerHTML = resultado;
            document.getElementById('resultado-box').style.display = 'block';
        }
    </script>

<?php include 'footer.php'; ?>
