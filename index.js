document.querySelector('.btn-primary').addEventListener('click', function() {
    window.location.href = 'kurslar.html';
});
const buttons = document.querySelectorAll('.kasb-buttons button');
const cards = document.querySelectorAll('.kasb-card');

buttons.forEach(button => {
    button.addEventListener('click', () => {
        cards.forEach(card => card.style.display = 'none');
        const category = button.textContent.trim();
        cards.forEach(card => {
            if (card.textContent.includes(category) || category === 'Barcha kasblar') {
                card.style.display = 'block';
            }
        });
    });
});
