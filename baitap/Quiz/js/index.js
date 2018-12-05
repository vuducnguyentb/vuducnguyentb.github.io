const answer1 = document.querySelector('.answer1');
const answer2 = document.querySelector('.answer2');
const answer3 = document.querySelector('.answer3');
const answer4 = document.querySelector('.answer4');
const title = document.querySelector('.title');
var i = 0;
var dem = 0;
var choise = "";
var container = document.querySelector('#container');
var question = document.querySelector('.question');
var footer = document.querySelector('footer');
var point = document.querySelector('.point');
var button = document.querySelector('.button');
//Nút chọn được đặt màu
let changeBg1 = () => {
    answer1.style.backgroundColor = 'rgb(62, 233, 150)';
    answer2.style.backgroundColor = ' #F781BE';
    answer3.style.backgroundColor = '#F781BE';
    answer4.style.backgroundColor = '#F781BE';
};
let changeBg2 = () => {
    answer2.style.backgroundColor = 'rgb(62, 233, 150)';
    answer1.style.backgroundColor = '#F781BE';
    answer3.style.backgroundColor = '#F781BE';
    answer4.style.backgroundColor = '#F781BE';
};
let changeBg3 = () => {
    answer3.style.backgroundColor = 'rgb(62, 233, 150)';
    answer2.style.backgroundColor = '#F781BE';
    answer1.style.backgroundColor = '#F781BE';
    answer4.style.backgroundColor = '#F781BE';
};
let changeBg4 = () => {
    answer4.style.backgroundColor = 'rgb(62, 233, 150)';
    answer2.style.backgroundColor = '#F781BE';
    answer3.style.backgroundColor = '#F781BE';
    answer1.style.backgroundColor = '#F781BE';
};
let changeBg = () => {
    answer4.style.backgroundColor = '#F781BE';
    answer2.style.backgroundColor = '#F781BE';
    answer3.style.backgroundColor = '#F781BE';
    answer1.style.backgroundColor = '#F781BE';
};
answer1.addEventListener('click', changeBg1);
answer2.addEventListener('click', changeBg2);
answer3.addEventListener('click', changeBg3);
answer4.addEventListener('click', changeBg4);
//khi ấn next xóa màu nền .
button.addEventListener('click', changeBg);
//mảng câu hỏi
var questions = [
    {
        tilte: "Vợ Messi tên là gì?",
        answer: [
            "Anastasia Kvitko",
            "Suzy Cortez",
            "Antonella Roccuzzo",
            "Maria Ozawa"
        ],
        result: "Antonella Roccuzzo"
    },
    {
        tilte: "Tên phần 1:American Horror",
        answer: [
            "Coven",
            "Murder House",
            "Asylum ",
            "Freak Show"
        ],
        result: "Murder House"
    },
    {
        tilte: "Giá gốc của xe VinFast Fadil",
        answer: [
            "423 milion",
            "500 milion",
            "400 milion",
            "342 milion"
        ],
        result: "423 milion"
    },
    {
        tilte: "Càng chơi càng ra nuớc",
        answer: [
            "Chơi bạc",
            "Chơi cờ",
            "Chơi XYZ",
            "Chơi game"
        ],
        result: "Chơi cờ"
    },
    {
        tilte: "Tháng nào có 29 ngày?",
        answer: [
            "Tháng 1",
            "Tháng 2",
            "Tháng 3",
            "Đáp án khác"
        ],
        result: "Đáp án khác"
    }
];
//Hiển thị object đầu tiên lên browser
title.innerText = questions[0].tilte;
answer1.innerHTML = "<a href='#'>" + questions[0].answer[0] + "</a>";
answer2.innerHTML = "<a href='#'>" + questions[0].answer[1] + "</a>";
answer3.innerHTML = "<a href='#'>" + questions[0].answer[2] + "</a>";
answer4.innerHTML = "<a href='#'>" + questions[0].answer[3] + "</a>";
//chọn đáp án
let = choiseAnswer = () => {
    if (answer1.addEventListener('click', changeBg1)) {
        choise = answer1.innerText;
    }
    if (answer2.addEventListener('click', changeBg2)) {
        choise = answer2.innerText;
    }
    if (answer3.addEventListener('click', changeBg3)) {
        choise = answer3.innerText;
    }
    if (answer4.addEventListener('click', changeBg4)) {
        choise = answer4.innerText;
    }
    return choise;
}
// onclick
let next = () => {
    dem++;
    i++;
    title.innerText = questions[i].tilte;
    answer1.innerHTML = "<a href='#'>" + questions[i].answer[0] + "</a>";
    answer2.innerHTML = "<a href='#'>" + questions[i].answer[1] + "</a>";
    answer3.innerHTML = "<a href='#'>" + questions[i].answer[2] + "</a>";
    answer4.innerHTML = "<a href='#'>" + questions[i].answer[3] + "</a>";
    choiseAnswer();
}
