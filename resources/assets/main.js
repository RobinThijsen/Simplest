// all features
window.Livewire?.directive('modal', function ({el, directive, component}) {
    initModal(el);

    // EVENT CLICK OUTSIDE
    $('html, body').on('click', function (event) {
        const isopen = el.getAttribute('x-modal-open') == "1";
        if (!isopen)
            return;

        const target = event.target;

        if (target != el && !el.contains(target))
            return;

        closeModal(el);
    });

    // EVENT PRESS ESCAPE
    $(document).on('keydown', function (event) {
        const isopen = el.getAttribute('x-modal-open') == "1";
        if (!isopen)
            return;

        if (event.key != 'Escape')
            return;

        closeModal(el);
    });
});

window.Livewire?.directive('modal-trigger', function ({el, directive, component}) {

    $(el).on('click', function() {
        const modal = document.querySelector('[wire\\:modal="' + directive.expression + '"]');

        if (!modal) {
            console.error('Modal named [' + directive.expression + '] not found!');
            return;
        }

        const isopen = modal.getAttribute('x-modal-open') == "1";
        const display = modal.getAttribute('x-modal-display');

        if (isopen)
            closeModal(modal);
        else
            openModal(modal, display);

        return;
    });
});

function initModal(modal) {
    $(modal).css({
        display: 'none',
        transform: 'scale(.9)',
        opacity: '0',
    });
}

function openModal(modal, display = 'block') {
    $('body').addClass('has-modal');
    modal.setAttribute('x-modal-open', '1');

    $(modal).css({
        display: display,
    });

    setTimeout(function () {
        $(modal).css({
            transform: 'scale(1)',
            opacity: '1',
        });
    }, 1);
}

function closeModal(modal) {
    $('body').removeClass('has-modal');
    modal.setAttribute('x-modal-open', '0');

    $(modal).css({
        transform: 'scale(.9)',
        opacity: '0',
    });

    setTimeout(function () {
        $(modal).css({
            display: 'none',
        });
    }, 200);
}
