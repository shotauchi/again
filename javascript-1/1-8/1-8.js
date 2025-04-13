let target = document.getElementById('btn01');
target.addEventListener('blur', function() {
    let span = document.getElementById('msg');
    span.classList.remove('hidden');
});