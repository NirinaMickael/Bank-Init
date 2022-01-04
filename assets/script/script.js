/* Trier l'element du tableau (list.php)*/
let key = ["Name","Position","Office","Age","Start date","Salary"],arrowbtn =document.querySelector('th span').childNodes;
arrowbtn.forEach((el)=>{
    if(el.nodeType==1){
        el.addEventListener('click',(ele)=>{
            console.log(ele.localname);
        });
    }
})