<?php

function getHeader() {
  $header = <<<_END
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>PSN Board</title>
      <link rel="icon" type="image/png" href="images/logo.png">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  _END;

  echo $header;
}

function getNavBar() {
  $navBar = <<<_END
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <a class="navbar-brand" href="https://board.polytech-services-nancy.fr/">
        <img src="images/psn.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        PSN Board
      </a>

      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="darkTrigger" checked>
        <label class="custom-control-label" for="darkTrigger">&#8239;&#8239;</label>
      </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" id="notifs">🔔 <span class="sr-only">Nouvelle(s) mise(s) à jour</span></button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link link_general active">🦄 Général 👈</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_projets">🗂️ Pôle proj'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_info">🖥️ Pôle info'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_comm">🎨 Pôle comm'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_quali">📊 Pôle quali'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_orga">ℹ️ Pôle orga'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_treso">💰 Pôle tréso'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link_partenaires">👥 Nos partenaires</a>
          </li>

          </ul>

        </div>

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Nouvelle mise à jour ! 📢</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Nouveautés de cette version :<br><br>
                  - ajout d'un mode sombre (dark theme)<br>
                  - ajout d'un lien vers GAgenda<br>
                </p>
                <hr>
                <div style="font-size: 13px;"><i>Version 6.0 du 29/01/2021. Tous droits réservés. <br>Copyright &copy; 2021 Polytech Services Nancy.</i></div></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">That's so CRAZZZZZYYYYY ❗🤯</button>
              </div>
            </div>
          </div>
        </div>

      </nav>
  _END;

  echo $navBar;
}

function addCard($href, $src, $title, $info, $textinfo) {
  if ($info == "FALSE") {
    $card = <<<_END
     <div class='col-xs-1'>
       <div class='card text-center'>
        <a href='$href' class='link-img' target=_blank>
          <img src='$src' class='img-responsive'>
        </a>

        <div class='card-body'>
         <button type='button' class='btn btn-light'>$title</button>
       </div>
     </div>
    </div>
    _END;
  }else if ($info == "TRUE"){
    $card = <<<_END
     <div class='col-xs-1'>
       <div class='card text-center'>
        <a href='$href' class='link-img' target=_blank>
          <img src='$src' class='img-responsive'>
        </a>

        <div class='card-body'>
          <button type='button'
         class='btn btn-light myPopover'
         data-toggle='popover'
         data-placement='right' title='$title'
         data-trigger='hover'
         data-content='$textinfo'>$title <svg class='bi bi-exclamation-circle' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
          <path d='M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z'/>
        </svg></button>
       </div>
     </div>
    </div>
    _END;
  }
  echo $card;
}

function loadFile($fichier) {
  $file = fopen($fichier, "r");

  while (!feof($file))
  {
    $cards = fgets($file);
    $champs = explode(";", $cards);

    $href = $champs[0];
    $src = $champs[1];
    $title = $champs[2];
    $info = $champs[3];
    $textinfo = str_replace("'", "&#039", $champs[4]);

    addCard($href, $src, $title, $info, $textinfo);
  }

  fclose($file);
}