var menu = document.getElementById('menu');

for (var i = 0; i < menu.childNodes.length; i++) {
    if (menu.childNodes[i].childNodes.length === 3) {
        menu.childNodes[i].addEventListener('mouseover', function (e) {
            e.currentTarget.childNodes[1].style.height = '100px';
        });
        
        menu.childNodes[i].addEventListener('mouseout', function (e) {
            e.currentTarget.childNodes[1].style.height = '0';
        });
    }
}
