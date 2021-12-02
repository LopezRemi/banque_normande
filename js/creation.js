const container = document.getElementById('accounts');
const accountTypes = ["Compte courant", "Livret A", "Compte epargne", "PEL"];
const lastCreatedAccount = document.getElementsByClassName('accountDiv');

                   
function createAccount() {

    let accounts = document.getElementsByClassName("account");

    let id = "account" + accounts.length;

     // Create card
     const card = document.createElement('div');
     card.classList = 'card-body';

     // Get the form content
     let type = document.getElementById('type').value;
     let amount = document.getElementById('amount').value;



     // card content
     const content = `
     <div id =${id} class="account col-xl-3 col-md-6 accountDiv">
         <div class="card bg-warning text-white mb-4">
           <div class="card-body">
             <p class="card-text">${type + id}</p>
             <p class="card-text">${amount} €</p></div>
             <div class="card-footer d-flex align-items-center justify-content-between">
                 <a class="small text-white stretched-link remove" href="#" onclick= remove('${id}')>Supprimer le compte</a>
                 <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
         </div>
     </div>
     `;
   
    if(accountTypes.includes(type) && amount >= 50){
     // show the card in the html 
     container.innerHTML += content;
    }
}

function remove(id){
    let element = document.getElementById(id);
    container.removeChild(element);
};