<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profissional Inbound Marketing, CRM & RevOps - [Seu Nome]</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Paleta de Cores Extraída da Foto */
        :root {
            --cor-fundo: #111317;           /* Azul-preto profundo (fundo da foto) */
            --cor-fundo-alt: #1a1e26;       /* Fundo secundário, cinza-preto mais claro */
            --cor-texto-principal: #e1e3e8; /* Branco-acinzentado frio (gotas d'água) */
            --cor-texto-secundario: #a8adb6; /* Cinza médio (folhas no fundo) */
            --cor-acento: #c3793e;         /* Laranja cobre queimado (caule) */
            --cor-acento-hover: #e09257;   /* Laranja cobre mais claro para hover */
            --cor-borda: rgba(168, 173, 182, 0.1); /* Borda sutil baseada nas cores frias */
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--cor-fundo);
            color: var(--cor-texto-principal);
            margin: 0;
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Estilo do Cabeçalho */
        header {
            padding: 20px 0;
            border-bottom: 1px solid var(--cor-borda);
            position: fixed;
            width: 100%;
            top: 0;
            background-color: rgba(17, 19, 23, 0.95); /* Semi-transparente com cor de fundo */
            backdrop-filter: blur(10px);
            z-index: 1000;
        }

        .header-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--cor-texto-principal);
            text-decoration: none;
        }

        .logo span {
            color: var(--cor-acento);
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav a {
            text-decoration: none;
            color: var(--cor-texto-principal);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--cor-acento);
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container">
            <div class="header-wrap">
                <a href="#" class="logo">[Seu <span>Nome</span>]</a>
                <nav>
                    <ul>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#sobre">Sobre mim</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
