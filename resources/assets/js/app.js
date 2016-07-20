var $document = $(document),
        $element = $('.portfolio-header'),
        className = 'black';
$document.scroll(function () {
    $element.toggleClass(className, $document.scrollTop() >= 50);
    $('body').toggleClass('fix', $document.scrollTop() >= 50);
});

$("a").on('click', function (event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function () {
            window.location.hash = hash;
        });
    }
});


