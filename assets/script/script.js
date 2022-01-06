/*chger l'icon*/
let tbody=document.querySelector('tbody');
class TableLIst{
    constructor(data,tbody){
        this.data=data;
        this.tbody=tbody; 
    }
    stateList=function(){
        let tr=this.tbody.childNodes,i=1;
        for (const value of this.data) {
            for (const key in value) {
                let td = document.createElement('td');
                let text =document.createTextNode(value[key]);
                td.appendChild(text);
                tr[i].insertBefore(td,tr[i].lastChild);
            }
            if(i<tr.length){
                i=i+2;
            }
        }
    }
    newStateList=function(){
        this.tbody.childNodes.forEach(tr=>{
            if(tr.nodeName=="TR"){
               while(tr.firstChild.className!="d-flex justify-content-around"){
                    tr.removeChild(tr.firstChild);
               }
            }
        })
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
        "Responsable" : "Brayn kev",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Mickael ",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Henri",
        "Montant prêt" : "162,700 AR",
        "Date du prêt" : "2022/11/28",
        "Date fin de remboursement": "2022/12/28"
    },
    {
        "Responsable" : "Justin bieber",
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
let objtable = new TableLIst(data,tbody);
objtable.stateList();
arrows.forEach((value,index) =>{
    if(index<4){
        value.childNodes[2].childNodes.forEach(arrowbtn=>{
            arrowbtn.addEventListener('click',(e)=>{
                objtable.newStateList();
                 if(e.target.id=="arrowdown"){
                     key=value.childNodes[2].previousSibling.previousSibling.textContent;
                     objtable.triListTableDSC(key);
                     objtable.stateList();
                 }else{
                    key=value.childNodes[2].previousSibling.previousSibling.textContent;
                     objtable.triListTableASC(key);
                     objtable.stateList();
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