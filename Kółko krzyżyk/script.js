const fieldsElements = document.querySelectorAll('.gra');

let activePlayer = 'X';

const fields = ['','','','','','','','','',];

const winningConditions = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [6, 4, 2]
]

const validateGame = () => {
    for(let i = 0; i <= 8; i++){
        
    }
}

fieldsElements.forEach(fields => {
    fields.addEventListener('click', e => {
        const { pos } = e.target.dataset;
        if(fields[pos] === ''){
            fields[pos] = activePlayer;}
            e.target.classList.add('board_item-filled-'+activePlayer);
            validateGame();
            activePlayer = activePlayer === 'X' ? 'O' : 'X';
    });
});
