<div class="row <?= $panelIndex === 0 ? '' : 'd-none' ?>" data-panel="<?= $panelIndex ?>">
    <?php
    // $panel from index.php
    foreach ($panel['links'] as $card) {
        ?>
        <div class='card text-center'>
            <a class='card-body' href='<?= $card['url'] ?>' target="_blank">
                <div class="img-container">
                    <img src='<?= $card['icon'] ?>' class='img-responsive'>
                </div>
                <span class="card-title"><?= $card['name'] ?></span>
                <?php
                if (!is_null($card['description'])) {
                    ?>
                    <button type="button" class="btn btn-secondary btn-popover" data-bs-container="body"
                            data-bs-toggle="popover"
                            data-bs-trigger="hover"
                            data-bs-placement="top" data-bs-content="<?= $card['description'] ?>">
                        <svg class='bi bi-exclamation-circle' width='1em' height='1em' viewBox='0 0 16 16'
                             fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                            <path fill-rule='evenodd'
                                  d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                            <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
                        </svg>
                    </button>
                    <?php
                }
                ?>
            </a>
        </div>
        <?php
    }
    ?>
</div>