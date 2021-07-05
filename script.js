function setDarkMode(inputDarkMode, forceDarkMode = null) {
    let darkSwitchDesktop = document.querySelector('#darkTriggerDesktop')
    let darkSwitchMobile = document.querySelector('#darkTriggerMobile')
    let navbar = document.querySelector('.navbar')
    if (forceDarkMode != null && forceDarkMode) {
        inputDarkMode.checked = true;
    } else if (forceDarkMode != null && !forceDarkMode) {
        inputDarkMode.checked = false;
    }
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
    if (typeof localStorage != 'undefined') {
        localStorage.setItem('psnBoardDark', inputDarkMode.checked ? 1 : 0 + '')
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

let darkSwitchDesktop = document.querySelector('#darkTriggerDesktop')
let darkSwitchMobile = document.querySelector('#darkTriggerMobile')

if (typeof localStorage != 'undefined') {
    if ('psnBoardDark' in localStorage) {
        darkMode = localStorage.getItem('psnBoardDark')
        setDarkMode(darkSwitchDesktop, darkMode === "1");
    } else {
        setDarkMode(darkSwitchDesktop, true);
    }
} else {
    setDarkMode(darkSwitchDesktop, true);
}

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