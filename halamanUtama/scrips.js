document.getElementById("lihatSelengkapnya").addEventListener("click", function () {
    document.getElementById("galeri").scrollIntoView({ behavior: "smooth" });
});

document.getElementById('menu-button').addEventListener('click', function () {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
});
