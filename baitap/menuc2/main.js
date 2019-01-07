function documentReady(){
    // gan 5 node li thành mảng
    var menuElements=document.querySelectorAll('#nav>li');
    for(var i=0;i<menuElements.length;i++){
        // gan 5 node li thành mảng
        var menuElement=menuElements[i];
        //bắt event onclick
        menuElement.onclick=function(){
          var menuChild= this.getElementsByClassName('sub-name'); 
        menuChild[0].style.display='block';
        }
    }
}