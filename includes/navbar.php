<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="https://board.polytech-services-nancy.fr/">
            <img src="images/psn.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            PSN Board
        </a>

        <div class="form-check form-switch d-none d-sm-block">
            <input type="checkbox" class="form-check-input" id="darkTriggerDesktop" checked>
            <label class="form-check-label" for="darkTriggerDesktop">&#8239;&#8239;</label>
        </div>

        <button type="button" class="btn btn-primary d-none d-sm-block" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"
                id="notifs">
            🔔
            <span class="visually-hidden">Nouvelle(s) mise(s) à jour</span>
        </button>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <?php
                $itemIndex = 0;
                foreach (getData()['tabs'] as $item) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $itemIndex === 0 ? 'active' : '' ?>"
                           data-navitem="<?= $itemIndex ?>"
                           data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">
                            <?= $item['name'] ?>
                        </a>
                    </li>
                    <?php
                    $itemIndex++;
                }
                ?>

            </ul>

            <div class="mobile-dark-mode-switch d-sm-none">
                <div class="">🌙 Dark mode</div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="darkTriggerMobile" checked>
                    <label class="form-check-label" for="darkTriggerMobile">&#8239;&#8239;</label>
                </div>
            </div>

        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             role="dialog"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Nouvelle mise à jour ! 📢</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nouveautés de cette version :<br><br>
                            - corrections graphiques<br>
                            - amélioration du stockage des liens<br>
                        </p>
                        <hr>
                        <div style="font-size: 13px;"><i>Version 7.0 du 01/07/2021. Tous droits réservés. <br>Copyright
                                &copy; 2021 Polytech Services Nancy.</i></div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">That's so CRAZZZZZYYYYY
                            ❗🤯
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
