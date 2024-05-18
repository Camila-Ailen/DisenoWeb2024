document.addEventListener('DOMContentLoaded', function() {
    const display = document.getElementById('display');
    const buttons = document.querySelectorAll('.btn');
    let currentInput = '';
    let expression = '';

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.getAttribute('data-value');

            if (value === 'C') {
                currentInput = '';
                expression = '';
                display.textContent = '0';
                return;
            }

            if (value === '=') {
                try {
                    expression = eval(expression);
                    display.textContent = expression;
                    currentInput = expression;
                    expression = '';
                } catch {
                    display.textContent = 'Error';
                    currentInput = '';
                    expression = '';
                }
                return;
            }

            currentInput += value;
            expression += value;
            display.textContent = currentInput;
        });
    });
});
