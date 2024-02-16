const pay = document.querySelector('#pay');
const form = pay.querySelector('form');
const div = form.querySelector('div');
const button = div.querySelector('button');

button.addEventListener("click", ()=> {
    alert("your message is received");
})
