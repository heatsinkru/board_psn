function setDarkMode(inputDarkMode) {
    let darkSwitchDesktop = document.querySelector('#darkTriggerDesktop')
    let darkSwitchMobile = document.querySelector('#darkTriggerMobile')
    let navbar = document.querySelector('.navbar')
    if (inputDarkMode.checked) {
        darkSwitchDesktop.checked = true;
        darkSwitchMobile.checked = true;
        document.body.classList.add('dark')
        navbar.classList.add("navbar-dark")
        navbar.classList.add("bg-dark")
        navbar.classList.remove("navbar-light")
        navbar.classList.remove("bg-light")
    } else {
        darkSwitchDesktop.checked = false;
        darkSwitchMobile.checked = false;
        document.body.classList.remove('dark')
        navbar.classList.remove("navbar-dark")
        navbar.classList.remove("bg-dark")
        navbar.classList.add("navbar-light")
        navbar.classList.add("bg-light")
    }
}

function hidePanels() {
    let panels = document.querySelectorAll('.container > .row')
    panels.forEach(function (panel) {
        if (!panel.classList.contains('d-none')) {
            panel.classList.add('d-none');
        }
    })

}

function showPanel(panelIndex) {
    let panels = document.querySelectorAll('.container > .row')
    panels.forEach(function (panel) {
        if (parseInt(panel.getAttribute('data-panel')) === panelIndex && panel.classList.contains('d-none')) {
            panel.classList.remove('d-none');
        }
    })
}

function removeNavItemIndicator() {
    let navItems = document.querySelectorAll('.nav-link')
    navItems.forEach(function (item) {
        let text = item.textContent
        text = text.replace('👈', '').trim();
        item.textContent = text;
        item.classList.remove('active')
    })
}

function addNavItemIndicator(navItem) {
    navItem.textContent = (navItem.textContent + ' 👈').trim()
    navItem.classList.add('active')
}

setDarkMode(document.querySelector('#darkTriggerDesktop'));
let darkSwitchDesktop = document.querySelector('#darkTriggerDesktop')
let darkSwitchMobile = document.querySelector('#darkTriggerMobile')
darkSwitchDesktop.addEventListener('change', function (e) {
    setDarkMode(e.target);
})
darkSwitchMobile.addEventListener('change', function (e) {
    setDarkMode(e.target);
})

let navItems = document.querySelectorAll('.nav-link')
navItems.forEach(function (item) {
    item.addEventListener("click", function (e) {
        hidePanels()
        showPanel(parseInt(e.target.getAttribute('data-navitem')))
        removeNavItemIndicator()
        addNavItemIndicator(e.target)
    })
})

let cards = document.querySelectorAll('.container .card')
cards.forEach(function (card) {
    card.addEventListener('click', function (e) {
        let linkElt = e.target.querySelector('a')
        location.href = linkElt.getAttribute('href')
    })
})

/*
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
    $(".link_orga").attr({
        class: "nav-link link_orga"
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
    $(".link_orga").text("ℹ️ Pôle orga'");
    $(".link_treso").text("💰 Pôle tréso'");
    $(".link_partenaires").text("👥 Nos partenaires");
}

$(document).ready(function () {

    //firstLoad();

    $(".link-img").on({

        mouseenter: function () {

            $(this).css("background-color", "#333");

        },

        mouseleave: function () {

            $(this).css("background-color", "transparent");

        }

    });

    $(".link_general").on({

        click: function () {

            resetAll();
            $(".general_row").show();

            $(this).attr({
                class: "nav-link link_general active"
            });

            $(this).text("🦄 Général 👈")

        }

    });

    $(".link_projets").on({

        click: function () {

            resetAll();
            $(".projets_row").show();

            $(this).attr({
                class: "nav-link link_projets active"
            });

            $(this).text("🗂️ Pôle proj' 👈")
        }

    });

    $(".link_info").on({

        click: function () {

            resetAll();
            $(".info_row").show();

            $(this).attr({
                class: "nav-link link_info active"
            });

            $(this).text("🖥️ Pôle info' 👈")
        }

    });

    $(".link_comm").on({

        click: function () {

            resetAll();
            $(".comm_row").show();

            $(this).attr({
                class: "nav-link link_comm active"
            });

            $(this).text("🎨 Pôle comm' 👈")
        }

    });

    $(".link_quali").on({

        click: function () {

            resetAll();
            $(".quali_row").show();

            $(this).attr({
                class: "nav-link link_quali active"
            });

            $(this).text("📊 Pôle quali' 👈")
        }

    });

    $(".link_orga").on({

        click: function () {

            resetAll();
            $(".orga_row").show();

            $(this).attr({
                class: "nav-link link_orga active"
            });

            $(this).text("ℹ️ Pôle orga' 👈")
        }

    });

    $(".link_treso").on({

        click: function () {

            resetAll();
            $(".treso_row").show();

            $(this).attr({
                class: "nav-link link_treso active"
            });

            $(this).text("💰 Pôle tréso' 👈")
        }

    });

    $(".link_partenaires").on({

        click: function () {

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

$("#darkTrigger").click(function () {
    if ($("input[type=checkbox]").is(':checked')) {
        $("body").addClass("dark");
        $(".btn-light").addClass("btn-dark");
        $(".btn-dark").removeClass("btn-light");
    } else {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $(".btn-dark").addClass("btn-light");
            $(".btn-light").removeClass("btn-dark");
        }
    }
});

//$("input[type=checkbox]").prop('checked',false);
$(document).ready(function () {
    if ($("input[type=checkbox]").is(':checked')) {
        $("body").addClass("dark");
        $(".btn-light").addClass("btn-dark");
        $(".btn-dark").removeClass("btn-light");
    } else {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $(".btn-dark").addClass("btn-light");
            $(".btn-light").removeClass("btn-dark");
        }
    }
});
 */