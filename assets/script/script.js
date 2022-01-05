/*charger l'icon*/
class TableLIst{
    constructor(data){
        this.data=data; 
    }
    printListTable=function(){
        let tbody =document.querySelector('tbody');
        for (const value of this.data) {
            let tr = document.createElement('tr');
            for (const key in value) {
                let td = document.createElement('td');
                let text =document.createTextNode(value[key]);
                td.appendChild(text);
                tr.appendChild(td);
            }
            tbody.appendChild(tr);
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
        "Name" : "Airi Satou",
        "Position" : "Accountan",
        "Office" : "tokyo",
        "Age" : "33",
        "Start date" : "2008/11/28",
        "Salary" : "$162,700"
    },
    {
        "Name" : "Angelica Ramos",
        "Position" : "Chief Executive Officier(CEO)",
        "Office" : "London",
        "Age" : "47",
        "Start date" : "2009/01/09",
        "Salary" : "$1,200,000"
    },
    {
        "Name" : "Ashton Cox",
        "Position" : "Junior Technical Author",
        "Office" : "San Francisco",
        "Age" : "66",
        "Start date" : "2009/01/12",
        "Salary" : "$86,000"
    },
    {
        "Name" : "Bradley Greer",
        "Position" : "Software Engineer",
        "Office" : "London",
        "Age" : "41",
        "Start date" : "2012/10/13",
        "Salary" : "$132,000"
    },
    {
        "Name" : "Branden Wagner",
        "Position" : "Software Engineer",
        "Office" : "San Francisco",
        "Age" : "28",
        "Start date" : "2011/06/07",
        "Salary" : "$206,850"
    },
    {
        "Name" : "Brielle Williamson",
        "Position" : "Integration Specialist",
        "Office" : "New York",
        "Age" : "61",
        "Start date" : "2012/12/02",
        "Salary" : "$372,000"
    },
    {
        "Name" : "Bruno Nash",
        "Position" : "Software Engineer",
        "Office" : "London",
        "Age" : "38",
        "Start date" : "2011/05/03",
        "Salary" : "$163,500"
    },
    {
        "Name" : "Cesar Vance",
        "Position" : "Pre-Sales Support",
        "Office" : "New York",
        "Age" : "46",
        "Start date" : "2011/12/12",
        "Salary" : "$106,450"
    },
    {
        "Name" : "Cara Stevens",
        "Position" : "Sales Assistant",
        "Office" : "New York",
        "Age" : "46",
        "Start date" : "2011/12/06",
        "Salary" : "$145,600"
    },
    {
        "Name" : "Cedric Kelly",
        "Position" : "Cedric Kelly",
        "Office" : "Edinburgh",
        "Age" : "22",
        "Start date" : "2012/03/29",
        "Salary" : "$433,060"
    }
],arrows= document.querySelectorAll('th');
let objtable = new TableLIst(data);
objtable.printListTable();
arrows.forEach( arrow => {
    if(arrow.parentNode.parentNode.nodeName==="THEAD"){
        let span = arrow.childNodes[3];
        span.childNodes.forEach(arrowbtn =>{
            arrowbtn.addEventListener('click',(e)=>{
                if(e.target.id=="arrowdown"){
                    key=span.previousSibling.previousSibling.textContent;
                    objtable.triListTableDSC(key);
                    objtable.deleteListtable();
                    objtable.printListTable();
                }else{
                    key=span.previousSibling.previousSibling.textContent;
                    objtable.triListTableASC(key);
                    objtable.deleteListtable();
                    objtable.printListTable();
                }
            })
        })
    }
});