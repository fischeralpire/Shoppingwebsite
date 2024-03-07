// menu.js
const menuContainer = document.createElement('div');
menuContainer.innerHTML = `
<header>
    <div class="container">
        <div class="logo">
            <a href="#">
                <img src="assets/logos/Alpainca-Logo.svg" alt="Alpainca Logo">
            </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html" ${window.location.pathname === '/index.html' ? 'class="active"' : ''}>Startseite</a></li>
                <li><a href="damen.html" ${window.location.pathname === '/damen.html' ? 'class="active"' : ''}>Damen</a></li>
                <li><a href="herren.html" ${window.location.pathname === '/herren.html' ? 'class="active"' : ''}>Herren</a></li>
                <li><a href="kinder.html" ${window.location.pathname === '/kinder.html' ? 'class="active"' : ''}>Kinder</a></li>
                <li><a href="contact.html" ${window.location.pathname === '/contact.html' ? 'class="active"' : ''}>Kontakt</a></li>

            </ul>
            <div class="shopping-cart">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </a>
                <span id="cart-item-count" class="badge badge-danger">0</span> <!-- Hier wird die Anzahl der Produkte im Warenkorb angezeigt -->
            </div>
            <div class="burger-menu" onclick="toggleMenu()">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
            </div>
        </nav>
    </div>
</header>

`;

document.body.appendChild(menuContainer);
