
let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'PRODUCT NAME 1',
        image: 'ii1.jpg',
        price: 8000
    },
    {
        id: 2,
        name: 'PRODUCT NAME 2',
        image: 'ii2.jpg',
        price: 120000
    },
    {
        id: 3,
        name: 'PRODUCT NAME 3',
        image: 'ii3.jpg',
        price: 4000
    },
    {
        id: 4,
        name: 'PRODUCT NAME 4',
        image: 'ii4.jpg',
        price: 1200
    },
    {
        id: 5,
        name: 'PRODUCT NAME 5',
        image: 'ii5.jpg',
        price: 5000
    },
    {
        id: 6,
        name: 'PRODUCT NAME 6',
        image: 'ii6.jpg',
        price: 6000
    },
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
       
        newDiv.classList.add('item');
        newDiv.innerHTML = 'item'`
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
            
                <li><img src="${value.image}"/></li>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div></div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`; 
                listCard.appendChild(newDiv);
                
        }
        
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
    
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}


