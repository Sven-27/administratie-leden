    <?php include './inc/templates/header.php'; ?>
        <section >
            <p>Welkom op de leden administratie,</p>
            <p>Bekijk hieronder hoeveel er nog moet worden betaald aan contributie per lid. Heb je vragen of klachten neem contact op met de beheerder: <a href="mailto:dummy@example.com">dummy@example.com</a>.</p>
        
            <p>De procentuele berekeningen worden individueel berekend en worden altijd afgerond op 2 decimalen.</p>

            <?php $controller->listDashboard(); ?>
        </section>
    <?php include './inc/templates/footer.php'; ?>
</body>
</html>
