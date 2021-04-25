document.querySelector('.nav-toggle-btn').addEventListener("click",function(e) {
	document.querySelector('.mob-nav-items').classList.toggle('d-block');
	document.body.classList.toggle('stop-scrolling');
});
const contents = [
	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ut, voluptatem libero, provident et rem fugiat amet, porro consequatur, commodi adipisci. Optio natus consequuntur excepturi doloremque expedita facere! Amet, nobis.',
	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ut, voluptatem libero, provident et rem fugiat amet, porro consequatur, commodi adipisci. Optio natus consequuntur.',
	'consectetur adipisicing elit. Aspernatur ut, voluptatem libero, provident et rem fugiat amet, porro consequatur, commodi adipisci. Optio natus consequuntur excepturi doloremque expedita facere! Amet, nobis.',
	'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur ut, voluptatem libero, provident et rem fugiat amet, porro  natus consequuntur excepturi doloremque expedita facere! Amet, nobis.'
]
icon_click_arr = [...document.querySelectorAll('.icon-click')]
icon_click_arr.forEach(function(item) {
	item.addEventListener("click",function(e) {
		document.querySelector("#icon-content").innerHTML = contents[Math.floor(Math.random() * contents.length)]
		e.target.classList.add('mt-3');
		icon_click_arr.filter(function(item) {
			if(item!=e.target) {
				item.classList.remove('mt-3')
			}
		})
	})
})

api_list_arr = [...document.querySelectorAll('.api-list')]
api_list_arr.forEach(function(item) {
	item.addEventListener("click",function(e) {
		document.querySelector("#slide-img").src = e.target.dataset.img;
		document.querySelector('.api_list_content').innerHTML = contents[Math.floor(Math.random() * contents.length)];
		e.target.classList.add('list-item_active');
		api_list_arr.filter(function(item) {
			if(item!=e.target) {
				item.classList.remove('list-item_active');
			}
		})
	})
})


const drop_arr = [...document.querySelectorAll('.btn-collapse')]
drop_arr.forEach(function(item) {	
	item.addEventListener("click",function(e) {
		document.getElementById(e.target.dataset.target).classList.toggle('show');
		document.querySelector("."+e.target.dataset.target).classList.toggle('rotate');
	})
})