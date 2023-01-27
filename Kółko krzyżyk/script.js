const fieldsElements = document.querySelectorAll('.gra');

const PLAYER1 = 'X';
const PLAYER2 = 'O';
let round = 1;

const field = [
    ['A','B','C'],
    ['D','E','F'],
    ['G','H','F']];

let liczbaRund = document.getElementById("round");

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
fieldsElements.forEach(field => {
field.addEventListener('click', pick)});

function pick(event) {
    const {row, column} = event.target.dataset;
    const turn = round % 2 === 0 ? PLAYER2 : PLAYER1;
    event.target.classList.add("board_item-filled-" + turn);
    liczbaRund.innerHTML = round;
    round++;
    field[row][column] = turn;
    check();
}

function check() {
    
}