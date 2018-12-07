window.addEventListener('load', function() {
    const $button = document.getElementById('main_button');
    const $modal = document.getElementsByClassName('modal');

    $button.addEventListener('click', function() {
        $modal.style.display="block";
    });

    $modal.addEventListener('click', function() {
        $modal.style.display="none";
    });

    const windowHeight = window.innerHeight;
    $modal.style.height = windowHeight + 'px';

});