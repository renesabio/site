    <style>
        footer { 
            margin-top: auto; 
            background-color: var(--bg-dark);
            padding: 60px 0 40px; 
            border-top: 1px solid var(--border-dark); 
        }
        .footer-wrap { display: flex; justify-content: space-between; align-items: center; }
        footer p { color: #71717a; font-size: 14px; }
        .footer-links a { color: #a1a1aa; font-size: 14px; margin-left: 32px; transition: color 0.2s;}
        .footer-links a:hover { color: var(--text-light); }
        @media (max-width: 600px) { 
            .footer-wrap { flex-direction: column; gap: 24px; text-align: center; } 
            .footer-links a { margin: 0 16px; display: inline-block; } 
        }
    </style>

    <footer>
        <div class="container footer-wrap">
            <p>&copy; <?php echo date('Y'); ?> Renê Sábio. Estruturação em Inbound Marketing, CRM e RevOps.</p>
            <div class="footer-links">
                <a href="https://inboundhub.com.br/" target="_blank">Inbound Hub</a>
                <a href="https://wa.me/5511939009202?text=Ol%C3%A1%2C%20vim%20pelo%20seu%20site%20e%20gostaria%20de%20conversar." target="_blank">Fale no WhatsApp</a>
            </div>
        </div>
    </footer>
</body>
</html>
