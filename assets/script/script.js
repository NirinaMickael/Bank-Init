/*chger l'icon*/
let tbody=document.querySelector('tbody');
class TableLIst{
    constructor(data){
        this.data=data; 
    }
    displayTable =function(tbody){
    tbody=tbody.childNodes;
        for (const key in tbody) {
            if (Object.hasOwnProperty.call(tbody, key)) {
               const element = tbody[key];
                if(key>10){
                    element.style.display="none";
                }
            }
        }
    }
    printListTable=function(){
        let tbody =document.querySelector('tbody'),
        tr=tbody.childNodes,i=1;
        for (const value of this.data) {
            for (const key in value) {
                let td = document.createElement('td');
                let text =document.createTextNode(value[key]);
                td.appendChild(text);
                tr[i].insertBefore(td,tr[i].lastChild.previousSibling.previousSibling);
            }
            if(i<tr.length){
                i=i+2;
            }
        }
    }
    deleteListtable=function(){
        let tbody =document.querySelector('tbody');
        while(tbody.firstChild){
            tbody.removeChild(tbody.firstChild);
        }
    }
    triListTableASC=(key) => this.data.sort((a,b)=>(a[key] > b [key]) ? 1 : 0)
    triListTableDSC=(key) => this.data.sort((a,b)=>(a[key] < b [key]) ? 1 : 0)
}
let data = [
    {
        "Responsable" : "Airi Satou",
        "Montant prêt" : "14,700 AR",
        "Date du prêt" : "2022/01/28",
        "Date fin de remboursement": "2022/03/08"
    },
    {
        "Responsable" : "Kely Satou",
        "Montant prêt" : "60,000 AR",
        "Date du prêt" : "2023/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Satou Mamadhou",
        "Montant prêt" : "10,000 AR",
        "Date du prêt" : "2022/02/28",
        "Date fin de remboursement": "2022/06/08"
    },
    {
        "Responsable" : "Kevin jhon",
        "Montant prêt" : "72,000 AR",
        "Date du prêt" : "2022/06/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Salah",
        "Montant prêt" : "30,000 AR",
        "Date du prêt" : "2022/02/14",
        "Date fin de remboursement": "2022/12/31"
    },
    {
        "Responsable" : "Ronaldo ",
        "Montant prêt" : "200,000 AR",
        "Date du prêt" : "2022/01/08",
        "Date fin de remboursement": "2023/01/08"
    },

    {
        "Responsable" : "Ash Kev",
        "Montant prêt" : "70,700 AR",
        "Date du prêt" : "2022/10/15",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Franck Dol",
        "Montant prêt" : "20,000 AR",
        "Date du prêt" : "2022/05/08",
        "Date fin de remboursement": "2022/05/18"
    },
    {
        "Responsable" : "Airi Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Airi Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Airi Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Airi Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Rii Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Ato Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },

    {
        "Responsable" : "Zoro Satou",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    }
],arrows= document.querySelectorAll('thead tr th');
let objtable = new TableLIst(data);
objtable.printListTable();
arrows.forEach((value,index) =>{
    if(index<4){
        value.childNodes[3].childNodes.forEach(arrowbtn=>{
            arrowbtn.addEventListener('click',(e)=>{
                 if(e.target.id=="arrowdown"){
                     key=value.childNodes[3].previousSibling.previousSibling.textContent;
                     objtable.triListTableDSC(key);
                     objtable.deleteListtable();
                     objtable.printListTable();
                 }else{
                    key=value.childNodes[3].previousSibling.previousSibling.textContent;
                     objtable.triListTableASC(key);
                     objtable.deleteListtable();
                     objtable.printListTable();
             }
            })
         })
    }
})
/*
 
*/
/*PAGINATION*/
let containItempagination = document.querySelector('.containItempag').childNodes; 
posActive = 3;
containItempagination.forEach(element=>{
    if(element.nodeType!=3){
        element.addEventListener('click',el =>{
            switch (el.target.nodeResponsable) {
                case "BUTTON":
                    if(el.tget.classResponsable.includes("btnPrev")){
                       if(posActive!=3){
                           containItempagination[posActive].childNodes[0].classList.remove('Active');
                           posActive=posActive-2;
                           containItempagination[posActive].childNodes[0].classList.add('Active');
                       }
                    }else{
                        if(posActive!=5){
                            containItempagination[posActive].childNodes[0].classList.remove('Active');
                            posActive=posActive+2;
                            containItempagination[posActive].childNodes[0].classList.add('Active');
                        }
                    }
                break;
                default:
                break;
            }
        })
    }
})