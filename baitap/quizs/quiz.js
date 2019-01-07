
//Khởi tạo Quiz
function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}
//tạo proto getQuestionIndex lấy chỉ số của question
Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}
//tạo proto guess tăng score
Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }

    this.questionIndex++;
}
//tạo proto isEnded 
Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}

