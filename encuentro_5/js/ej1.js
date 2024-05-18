document.addEventListener('DOMContentLoaded', function() {
    var clickButton = document.getElementById('clickButton');
    var clickCount = document.getElementById('clickCount');
    var count = 0;

    clickButton.addEventListener('click', function() {
        count++;
        clickCount.textContent = count;
    });
});
