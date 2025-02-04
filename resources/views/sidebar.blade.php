<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<button class="toggle-btn" id="toggleSidebar">
    <img src="/img/ikon11.png" alt="Toggle Sidebar" id="toggleIcon">
</button>
<div class="sidebar" id="sidebar">
    <div class="logo">
        <img src="/img/LOGO REKA 1.png" alt="Logo Reka">
    </div>
    <ul class="menu">
        <p>MENU</p>
        <li><a href="#"><img src="/img/ikon1.png" alt="Ikon Dashboard">&nbsp; Dashboard</a></li>
        <li><a href="#"><img src="/img/ikon2.png" alt="Ikon Memo">&nbsp; Memo</a></li>
        <li><a href="#"><img src="/img/ikon3.png" alt="Ikon Undangan Rapat">&nbsp; Undangan Rapat</a></li>
        <li><a href="#"><img src="/img/ikon4.png" alt="Ikon Risalah Rapat">&nbsp; Risalah Rapat</a></li>
        <li class="submenu">
            <a href="#" class="toggle-submenu"><img src="/img/ikon5.png" alt="Ikon Arsip">&nbsp; Arsip<img class="opsi-icon1" src="/img/ikon10.png" alt="ikon panah opsi"></a>
            <ul class="submenu-items">
                <li><a href="#">Memo</a></li>
                <li><a href="#">Undangan Rapat</a></li>
                <li><a href="#">Risalah Rapat</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#" class="toggle-submenu"><img src="/img/ikon6.png" alt="Ikon Laporan">&nbsp; Laporan<img class="opsi-icon2" src="/img/ikon10.png" alt="ikon panah opsi"></a>
            <ul class="submenu-items">
                <li><a href="#">Memo</a></li>
                <li><a href="#">Undangan Rapat</a></li>
                <li><a href="#">Risalah Rapat</a></li>
            </ul>
        </li>
        <p class="other-title">OTHERS</p>
        <li class="submenu">
            <a href="#" class="toggle-submenu"><img src="/img/ikon7.png" alt="Ikon Setting">&nbsp; Setting<img class="opsi-icon3" src="/img/ikon10.png" alt="ikon panah opsi"></a>
            <ul class="submenu-items">
                <li><a href="#">User Management</a></li>
                <li><a href="#">Data Lembaga</a></li>
                <li><a href="#">Edit Profile</a></li>
            </ul>
        </li>
        <li><a href="#"><img src="/img/ikon8.png" alt="Ikon Memo">&nbsp; Info</a></li>
    </ul>
</div>
<script>
    const toggleSubmenus = document.querySelectorAll('.toggle-submenu');

    toggleSubmenus.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const submenu = toggle.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });
    
    const toggleSidebar = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const toggleIcon = document.getElementById('toggleIcon');

    toggleSidebar.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');

        if (sidebar.classList.contains('hidden')) {
            toggleSidebar.style.transform = 'translateX(-200px)';
            toggleIcon.src = '/img/ikon11.png'; // Gambar saat sidebar tertutup
            toggleIcon.alt = 'Open Sidebar';
        } else {
            toggleSidebar.style.transform = 'translateX(0)';
            toggleIcon.src = '/img/ikon11.png'; // Gambar saat sidebar terbuka
            toggleIcon.alt = 'Close Sidebar';
        }
    });
</script>
</body>
</html>