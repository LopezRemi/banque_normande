window.addEventListener("load", showRates);

function showRates(){

    fetch('data/change.json').then(function(res){
        return res.json();
    }).then(function(res){
        let array = res;
        console.log(array);

         // récupération des valeur pour les metter en header et stockage dans un tableau 
        let col = [];
        for (let i = 0; i < array.length; i++) {
            for (let key in array[i]) {
                if (col.indexOf(key) === -1) {
                    // console.log(key);
                    col.push(key);
                }
            }
        }

        // création tableau et class
        let table = document.createElement("table");
        table.classList.add('table');

        // création header

        let tr = table.insertRow(-1);

        for (let i = 0; i < col.length; i++) {
            let th = document.createElement("th");
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ajout du json dans les lignes du tableau
        for (let i = 0; i < array.length; i++) {

            tr = table.insertRow(-1);

            for (let j = 0; j < col.length; j++) {
                let tableCell = tr.insertCell(-1);
                tableCell.innerHTML = array[i][col[j]];
            }
        }

        // ajout du tableau dans la div du html "showData"
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);

    });

}