var currentQuestion=0;
var score=0;
var toQuestion=questions.length;
var container=document.getElementById('container');
var questionEl=document.getElementById('question');
var otp1=document.getElementById('opt1');
var otp2=document.getElementById('opt2');
var otp3=document.getElementById('opt3');
var otp4=document.getElementById('opt4');
var nextButton=document.getElementById('nextButton');
var resultContaner= document.getElementById('result');

// load nội dung question
function loadQuestion(questionIndex){
    var q= questions[questionIndex];
    questionEl.textContent=(questionIndex+1)+'.'+q.question;
    otp1.textContent=q.option1;
    otp2.textContent=q.option2;
    otp3.textContent=q.option3;
    otp4.textContent=q.option4;
}
//
function loadNextQuestion(){
    var selectOption=document.querySelector('input[type=radio]:checked');
    // if(!selectOption){
    //     alert("Chọn câu hỏi đi.");
    //     return;
    // }
    var answer=selectOption.value;
    if(questions[currentQuestion].answer===answer){
        score+=10;
    }
    selectOption.checked=false;
    currentQuestion++;
    if(currentQuestion==toQuestion-1){
        nextButton.textContent='Finish';
    }
    if(currentQuestion==toQuestion){
        container.style.display='none';
        resultContaner.style.display='';
        resultContaner.textContent='Score your is:'+score;
        return;
    }
    loadQuestion(currentQuestion);
}
loadQuestion(currentQuestion);