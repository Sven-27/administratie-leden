<?php include './inc/templates/header.php'; ?>
        <section class="text-black">
            <p>Hier kunt u families toevoegen. Eerst moet een familie aangemaakt worden alvorens u een familielid kunt toevoegen.</p>

            <?php if (isset($_GET['action']) && $_GET['action'] === 'add') { ?>
                <?php $controller->addFamilyForm(); ?>
            <?php } elseif (isset($_GET['id']) && isset($_GET['action']) && ($_GET['action'] === 'update' || $_GET['action'] === 'view' || $_GET['action'] === 'delete')) { ?>
                <?php if ($_GET['action'] === 'update') { ?>
                    <?php $controller->editFamilyForm(); ?>
                <?php } ?>
                <?php if ($_GET['action'] === 'delete') { ?>
                    <?php $controller->deleteFamilyForm(); ?>
                <?php } ?>
                <?php if ($_GET['action'] === 'view') { ?>
                    <?php $controller->viewFamily(); ?>
                <?php } ?>
            <?php } else { ?>
            <a href="./families.php?action=add">
                <button class="good">Familie(s) toevoegen</button>
            </a>
            <?php $controller->listFamilies(); ?>
            <?php } ?>
        </section>
    <?php include './inc/templates/footer.php'; ?>
</body>
</html>
