let My_Acocount = document.getElementById('menu_usuario');
let Not_Logged = document.querySelector('#not_login');

let login = () => {
    My_Acocount.style.display = 'block';
    Not_Logged.style.display = 'none';
}

let logout = () => {
    My_Acocount.style.display = 'none';
    Not_Logged.style.display = 'block';
}
