var container = document.getElementById('container');
var question = document.querySelector('.question');
var titleQues = document.querySelector('.tit-ques');
var answer1 = document.querySelector('.answer1');
var answer2 = document.querySelector('.answer2');
var answer3 = document.querySelector('.answer3');
var a1 = document.querySelector('.a1');
var a2 = document.querySelector('.a2');
var a3 = document.querySelector('.a3');
var btnNext = document.querySelector('.btn-next');
var reSult = document.querySelector('.reSult');
var i = 0;
var dem = 0;
var choise = '';
var resultChoise;
var point = 0;
// đối tượng question
var questions = [
    {
        title: "Ai thông minh hơn hs:",
        answer1: "Lớp 6",
        answer2: "Lớp 5",
        answer3: "Lớp 7",
        result: "2"
    },
    {
        title: "Wu ái ni là gì:",
        answer1: "Tau ghét mi",
        answer2: "Tau không biết",
        answer3: "Tau thích mi",
        result: "3"
    },
    {
        title: "Phim nào là kinh dị",
        answer1: "Once piece",
        answer2: "Songoku",
        answer3: "American horror story",
        result: "3"
    },
    {
        title: "Địa chỉ mới Techmaster:",
        answer1: "48 Tố Hữu",
        answer2: "14 Nguyễn Đình Chiểu",
        answer3: "165 Cầu Giấy",
        result: "1"
    },
    {
        title: "Dell là hãng của nước nào?",
        answer1: "Japan",
        answer2: "China",
        answer3: "Vietnam",
        result: "2"
    }
]
// đổi màu
function changeBg1() {
    answer1.style.background = '#000';
    answer1.style.color = '#7ded8a';
    answer2.style.background = '#7ded8a';
    answer2.style.color = '#000';
    answer3.style.background = '#7ded8a';
    answer3.style.color = '#000';
}
function changeBg2() {
    answer2.style.background = '#000';
    answer2.style.color = '#7ded8a';
    answer1.style.background = '#7ded8a';
    answer1.style.color = '#000';
    answer3.style.background = '#7ded8a';
    answer3.style.color = '#000';
}
function changeBg3() {
    answer3.style.background = '#000';
    answer3.style.color = '#7ded8a';
    answer1.style.background = '#7ded8a';
    answer1.style.color = '#000';
    answer2.style.background = '#7ded8a';
    answer2.style.color = '#000';
}
//hiển thị câu hỏi đầu tiên;
titleQues.innerText ='Câu 1:'+questions[0].title;
a1.innerText = questions[0].answer1;
a2.innerText = questions[0].answer2;
a3.innerText = questions[0].answer3;
//gán value
answer1.value = questions[0].answer1;
answer2.value = questions[0].answer2;
answer3.value = questions[0].answer3;
//Bắt event Next
let next = () => {
    resultChoise = questions[dem].result;
    console.log("Câu" + (dem + 1));
    console.log("Đáp án đúng:" + resultChoise);

    let arr = document.getElementsByClassName('answer');
    let valueAnswer = ''
    for (i = 0; i <= arr.length; i++) {
        if (arr[i].checked) {
            valueAnswer = i + 1;
            break;
        }
    }
    console.log("Bạn đã chọn"+valueAnswer);
    if(resultChoise==valueAnswer){
        point++;
    }
    console.log("Điểm hiện tại:"+point);
    console.log("Dem:"+dem);
    if(dem==4){
        btnNext.innerHTML='FINISH';
        alert("bạn được"+point+"điểm");
        location.href='chaomung.html';
    }
    // for (var j = 0; j < questions.length; j++) {
    //     if (valueAnswer == questions[j].result) {
    //         console.log(valueAnswer);
    //         console.log(questions[j].result);
    //         point++;
    //     }
    // }

    //Hiển thị các value của question ra input
    titleQues.innerText = 'Câu'+[dem+2]+questions[dem+1].title;
    a1.innerText = questions[dem+1].answer1;
    a2.innerText = questions[dem+1].answer2;
    a3.innerText = questions[dem+1].answer3;
    answer1.value = questions[dem+1].answer1;
    answer2.value = questions[dem+1].answer2;
    answer3.value = questions[dem+1].answer3;  
    dem++;
    
    // console.log("Dem:"+dem);
    // //tính điểm
    // if (resultChoise == valueAnswer) {
    //     point++;
    // }
    // console.log("Điểm là:" + point);
    // reSult.innerHTML = "<h2> Bạn đã trả lời đúng" + point + "</h2>";
    // if (dem == 4) {
    //     btnNext.innerHTML = 'FINISH';
    //     // reSult.style.background='#888';
    //     // reSult.innerHTML='<h2>Điểm của bạn là:'+point+"</h2>";
    //     // reSult.style.display='block'; 
    // }

 

    // console.log("Điểm:"+point);
}

let kq = 5;

export function square(x) {
    return x * x;
}

