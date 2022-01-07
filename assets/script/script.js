/*changer l'icon*/
/* recuperer l'elemnent tbody de la page table.php*/
let tbody=document.querySelector('tbody');
class TableList{
    constructor(data,tbody){
        this.data=data; 
        this.tbody=tbody; 
    }
    /* Fonnction qui gère la liste*/
    stateList=function(){
        /*tr : table row */
        let tr=this.tbody.childNodes,i=1;
        for (const value of this.data) {
            for (const key in value) {
                /*creation des elements td dans tr*/
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
    /*fontion qui gère la nouvelle etat de la liste*/
    newStateList=function(){
        this.tbody.childNodes.forEach(tr=>{
            if(tr.nodeName=="TR"){
               while(tr.firstChild.className!="d-flex justify-content-around"){
                    tr.removeChild(tr.firstChild);
               }
            }
        })
    }
    /*trie croissant des données de la table*/
    triListTableASC=(key) => this.data.sort((a,b)=>(a[key] > b [key]) ? 1 : 0)
    /*trie décroissant des données de la table*/
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
];
/*recuperer les "table head " de table*/
let arrows= document.querySelectorAll('thead tr th');
/*Un objet TableList*/
let objtable = new TableList(data,tbody);
objtable.stateList();
/*Parourus chaque th de la table apart la derniere th qui se trouve au 4 ieme pos*/
arrows.forEach((value,index) =>{
    if(index<4){
        /* puis parcourus les enfants d'elemet span dans th*/
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
/*PAGINATION*/

let containItempagination = document.querySelector('.containItempag').childNodes; 
/* position de la liste visible sur l'ecran*/
posActive = 3;
/* parcourus les enfants de la pagination*/
containItempagination.forEach(element=>{
    /*pou recuperer l'enfant de type balise*/
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