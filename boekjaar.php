<?php include './inc/templates/header.php'; ?>
        <section class="text-black">
            <p>Hieronder kunt u de boekjaren bewerken. (aanpassen, verwijderen, toevoegen). Er kan maar een bedrag per jaar ingevuld worden.</p>

            <?php if (isset($_GET['action']) && $_GET['action'] === 'add') { ?>
                <?php $controller->addBookYearForm(); ?>
            <?php } elseif (isset($_GET['id']) && isset($_GET['action']) && ($_GET['action'] === 'update' || $_GET['action'] === 'view' || $_GET['action'] === 'delete')) { ?>
                <?php if ($_GET['action'] === 'update') { ?>
                    <?php $controller->editBookYearForm(); ?>
                <?php } ?>
                <?php if ($_GET['action'] === 'delete') { ?>
                    <?php $controller->deleteBookYearForm(); ?>
                <?php } ?>
                <?php if ($_GET['action'] === 'view') { ?>
                    <?php $controller->viewBookYear(); ?>
                <?php } ?>
            <?php } else { ?>
            <a href="./boekjaar.php?action=add">
                <button class="good">Boekjaar toevoegen</button>
            </a>
            <?php $controller->listBookYears(); ?>
            <?php } ?>
        </section>
    <?php include './inc/templates/footer.php'; ?>
</body>
</html>
