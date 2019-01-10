//json là kiểu định dạng dữ liệu thuần túy

// var jsonString='["Văn Thanh","Quang Hải"]';
var jsonObject='{"name":"Công Phượng","age":20}';
var jsonArr='[{"name":"Công Phượng","age":20},{"name":"Công Phượng","age":20},{"name":"Công Phượng","age":20}]';
//covert string sang dl mảng
var originArr=JSON.parse(jsonArr);
for(let originObject of originArr){
    console.log(originObject);
}

//biến Object thành JSON
var student=[
    {
        name:"Văn Thanh",
        age:21,
        phone:0918212888,
        address:"Hải Dương"
    },
    {
        name:"Quang Hải",
        age:20,
        phone:091887987,
        address:"Hà Nội"
    }
]

var jsonString=JSON.stringify(student);

//localStoage
//lưu dl vào localStorage
localStorage.setItem('name','Văn Thanh');
//lấy dl 
console.log(localStorage.getItem('name'));
//xóa dl
localStorage.removeItem('name');
localStorage.setItem('student',JSON.stringify(student));

