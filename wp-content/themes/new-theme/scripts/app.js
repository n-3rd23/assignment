document.querySelector('.nav-toggle-btn').addEventListener("click",function(e) {
	document.querySelector('.mob-nav-items').classList.toggle('d-block');
	document.body.classList.toggle('stop-scrolling');
})