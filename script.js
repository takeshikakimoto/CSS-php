window.addEventListener('load', function() {
    const $button = document.getElementById('main_button');
    const $modal = document.getElementsByClassName('modal');

    $button.addEventListener('click', function() {
        $modal[1].style.display="block";
    });

    $modal[1].addEventListener('click', function() {
        $modal[1].style.display="none";
    });

    const windowHeight = window.innerHeight;
    $modal[1].style.height = windowHeight + 'px';

});