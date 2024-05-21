const envoltura = document.querySelector('.envoltura');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

registerLink.onclick=()=>{
	envoltura.classList.add('active');
}

loginLink.onclick=()=>{
	envoltura.classList.remove('active');
}
