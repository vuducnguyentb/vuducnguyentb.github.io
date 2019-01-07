function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // hiển thị question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // hiển thị options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// Tạo mảng questions
var questions = [
    new Question("1+1=?", ["2", "3","4", "5"], "2"),
    new Question("Bác Hồ sinh năm bn?", ["1980", "1809", "1890", "1089"], "1890"),
    new Question("King là gì", ["Công chúa", "Nông dân","Đại gia", "Vua"], "Vua"),
    new Question("Quả Bóng Vàng VN 2018 là ai?", ["Quang Hải", "Văn Lâm", "Anh Đức", "Văn Đức"], "Quang Hải"),
    new Question("Nhân vật chính anime Once piece", ["Songoku", "Lufy", "Ichigo", "Nel"], "Lufy")
];

// tạo 1 object quiz
var quiz = new Quiz(questions);

// display quiz
populate();




