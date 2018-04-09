$('.navItem').click(function () {
    $('.navItem').removeClass('activeItem').addClass('noActive');
    $(this).removeClass('noActive').addClass('activeItem')
})

function greeting() {
    $('.quote').animate({
        top: '-20px',
        opacity: '1',
    }, 1750)
}

$('#clear').click(function () {
    clearInputs();
    console.log('d')
})

function clearInputs() {
    $('.contactForm_imput').val('');
    $('.contactForm_imput---Message').val('');
}

$('#showSkills').click(function () {
    if ($('.abtMe_Skills').css('display') == 'none') {
        $('.abtMe_Skills').css('display','block')
    } else {
        $('.abtMe_Skills').css('display','none')
    }
})