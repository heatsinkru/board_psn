function firstLoad() {
  $(".projets_row").hide();
  $(".info_row").hide();
  $(".comm_row").hide();
  $(".quali_row").hide();
  $(".treso_row").hide();
  $(".partenaires_row").hide();
  $(".description-area").hide();
}

function resetAll() {
  $(".row").hide();
  $(".link_general").attr({
    class: "nav-link link_general"
  });
  $(".link_projets").attr({
    class: "nav-link link_projets"
  });
  $(".link_info").attr({
    class: "nav-link link_info"
  });
  $(".link_comm").attr({
    class: "nav-link link_comm"
  });
  $(".link_quali").attr({
    class: "nav-link link_quali"
  });
  $(".link_treso").attr({
    class: "nav-link link_treso"
  });
  $(".link_partenaires").attr({
    class: "nav-link link_partenaires"
  });
  $(".link_general").text("🦄 Général");
  $(".link_projets").text("🗂️ Pôle proj'");
  $(".link_info").text("🖥️ Pôle info'");
  $(".link_comm").text("🎨 Pôle comm'");
  $(".link_quali").text("📊 Pôle quali'");
  $(".link_treso").text("💰 Pôle tréso'");
  $(".link_partenaires").text("👥 Nos partenaires");
}

$(document).ready(function() {

  firstLoad();

  $("#admin_space").on({

    click: function() {

      document.location.href="adminspace.php";

    }

  });

  $(".link-img").on({

   mouseenter: function(){

     $(this).css("background-color", "#333");

   },

   mouseleave: function(){

     $(this).css("background-color", "transparent");

   }

  });

  $(".link_general").on({

    click: function(){

      resetAll();
      $(".general_row").show();

      $(this).attr({
        class: "nav-link link_general active"
      });

      $(this).text("🦄 Général 👈")

    }

  });

  $(".link_projets").on({

    click: function(){

      resetAll();
      $(".projets_row").show();

      $(this).attr({
        class: "nav-link link_projets active"
      });

      $(this).text("🗂️ Pôle proj' 👈")
    }

  });

  $(".link_info").on({

    click: function(){

      resetAll();
      $(".info_row").show();

      $(this).attr({
        class: "nav-link link_info active"
      });

      $(this).text("🖥️ Pôle info' 👈")
    }

  });

  $(".link_comm").on({

    click: function(){

      resetAll();
      $(".comm_row").show();

      $(this).attr({
        class: "nav-link link_comm active"
      });

      $(this).text("🎨 Pôle comm' 👈")
    }

  });

  $(".link_quali").on({

    click: function(){

      resetAll();
      $(".quali_row").show();

      $(this).attr({
        class: "nav-link link_quali active"
      });

      $(this).text("📊 Pôle quali' 👈")
    }

  });

  $(".link_treso").on({

    click: function(){

      resetAll();
      $(".treso_row").show();

      $(this).attr({
        class: "nav-link link_treso active"
      });

      $(this).text("💰 Pôle tréso' 👈")
    }

  });

  $(".link_partenaires").on({

    click: function(){

      resetAll();
      $(".partenaires_row").show();

      $(this).attr({
        class: "nav-link link_partenaires active"
      });

      $(this).text("👥 Nos partenaires 👈")
    }

  });

 $(".myPopover").popover();

});

