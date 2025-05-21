function showLoader() {
    $('#loader').show().css('display', 'flex');
}
function hideLoader() {
    $('#loader').show().css('display', 'none');
}

function autoResize(element) {
    element.style.height = 'auto';
    element.style.height = (element.scrollHeight) + 'px';
}

function defaultSize(element) {
    element.style.height = (3 * parseFloat(getComputedStyle(element).lineHeight)) + 'px';
}

document.addEventListener('DOMContentLoaded', function() {
    var numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(function(input) {
        input.addEventListener('wheel', function(e) {
            e.preventDefault();
        });
    });
});
