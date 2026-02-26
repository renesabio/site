<?php include 'header.php'; ?>

<style>
    .card-linkedin {
        background-color: #0a66c2; /* Cor oficial do LinkedIn */
        color: white;
    }
    .card-linkedin h3, .card-linkedin p { color: white; }
    .card-linkedin .btn { background-color: white; color: #0a66c2; }
    .card-linkedin .btn:hover { background-color: #f3f2ef; }

    .card-inbound {
        background-color: #4f46e5; /* Índigo Inbound Hub */
        color: white;
    }
    .card-inbound h3, .card-inbound p { color: white; }
    .card-inbound .btn { background-color: white; color: #4f46e5; }
    .card-inbound .btn:hover { background-color: #e0e7ff; }
    .logo-inbound { max-width: 150px; margin-bottom: 15px; }
</style>

<section class="sobre-mim container">
    <h2>Olá, eu sou o Renê.</h2>
    <p><strong>Diretor de Marketing</strong> focado em construir ecossistemas de tração e receita.</p>
    <br>
    <p>Minha atuação vai muito além de campanhas isoladas. Ajudo empresas a estruturarem máquinas de aquisição previsíveis, integrando Inbound Marketing estratégico, performance analítica, processos comerciais e tecnologia. O objetivo é um só: escalar negócios reais com dados e inteligência, criando conexões duradouras com o mercado.</p>
</section>

<section class="cards-section container">
    <div class="card card-linkedin">
        <h3>LinkedIn</h3>
        <p>Acompanhe minha rotina como Diretor, análises de mercado, estratégias de aquisição e insights sobre liderança em marketing.</p>
        <a href="https://www.linkedin.com/in/renesabio/" target="_blank" class="btn">Conectar no LinkedIn</a>
    </div>

    <div class="card card-inbound">
        <img src="https://inboundhub.com.br/wp-content/uploads/2024/01/logo-branca.png" alt="Inbound Hub Logo" class="logo-inbound" onerror="this.style.display='none'">
        <h3>Inbound Hub</h3>
        <p>Fundador da comunidade. Um ecossistema dedicado para profissionais que vivem as trincheiras do marketing trocarem experiências e evoluírem juntos.</p>
        <a href="https://inboundhub.com.br/" target="_blank" class="btn">Conhecer a Comunidade</a>
    </div>
</section>

<?php include 'footer.php'; ?>
