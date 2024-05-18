document.addEventListener('DOMContentLoaded', function() {
    var listItems = document.querySelectorAll('.list-item');

    listItems.forEach(function(item) {
        item.addEventListener('click', function() {
            item.classList.toggle('clicked');
        });
    });
});
