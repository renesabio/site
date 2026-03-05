<style>
        /* Estilos do Rodapé */
        footer {
            padding: 40px 0;
            border-top: 1px solid var(--cor-borda);
            text-align: center;
            color: var(--cor-texto-secundario);
            font-size: 0.9rem;
        }

        footer .container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        footer a {
            color: var(--cor-texto-secundario);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        footer a:hover {
            color: var(--cor-acento);
        }
    </style>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> [Seu Nome]. Especialista em Inbound Marketing, CRM e RevOps.</p>
            <p>Construído sobre a essência dos tons escuros e acentos quentes.</p>
            <p><a href="#header">Voltar ao topo</a></p>
        </div>
    </footer>

</body>
</html>
