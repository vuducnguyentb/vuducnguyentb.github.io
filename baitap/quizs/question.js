
// khởi tạo Question
function Question(text,choices,answer){
    this.text=text;
    this.choices=choices;
    this.answer=answer;
}
//tạo proto isCorrectAnswer chọn đáp án đúng
Question.prototype.isCorrectAnswer=function(choice){
    return this.answer===choice;
}