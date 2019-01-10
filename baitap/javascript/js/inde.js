//1lưu thông tin cá nhân name age address vào localstorage.Theo key tương ứng.
localStorage.setItem('name','Vũ Đức Nguyên');
localStorage.setItem('age',25);
localStorage.setItem('address','Thái Bình');
//2Lấy ra thông tin name age và alert lên trình duyệt
var name= localStorage.getItem('name');
var age=localStorage.getItem('age');
alert(`Tên: ${name} ,Tuổi:${age}`);
//3Xóa bỏ key address trong localstorage
localStorage.removeItem('address');
//4Tạo 1 object chưa thông tin cá nhân và lưu vào localstorage
var person={
    name:"Hạnh Nguyễn",
    age:22,
    address:"Vĩnh Phúc"
}
localStorage.setItem('person',JSON.stringify(person));
//5Lấy Object vửa lưu vào localstorage sử dụng JSON.parse để lấy lại object trong js
var jsonPerson=JSON.parse(localStorage.getItem('person'));
//6Console giá trị object vừa nhận được.
console.log(jsonPerson);
