
function include(uri, callback) {
	var script = document.createElement("script");
	script.src = uri;
	script.onload = callback;
	document.head.appendChild(script);
}

include('./js/vendors/jquery-3.3.1.min.js', function () {
	if ($('.header_menu_btn').length) {
		$('.header_menu_btn').click(function () {
			$('.header_menu').toggleClass('activate_header_menu')
		})
	}
	if ($('.slider_wrapper').length) {

		const target = document.querySelector('.slider_wrapper');
		const slides = document.querySelectorAll('.slide');
		let timer = null;
		var slideIndex = 0;

		slides.forEach(function (slide, i) {
			const target = document.querySelector('.slider_dots')
			let dot = document.createElement('span');
			dot.classList.add('dot');
			dot.addEventListener('click', function () {
				currentSlide(i);
			})
			target.appendChild(dot);
		})
		let dots = document.querySelectorAll('.dot');
		showSlides();
		function currentSlide(n) {
			clearTimeout(timer);
			timer = null;
			showSlides(slideIndex = n);
		}

		function showSlides() {
			var i;
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
				dots[i].classList.remove('dot_active');
			}
			slideIndex++;
			if (slideIndex > slides.length) { slideIndex = 1 }
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].classList.add('dot_active');
			timer = setTimeout(showSlides, 4000)
		}
	}
	if ($('#map').length) {

		var myMap;
		var myPlacemark;

		ymaps.ready(init);

		function init() {
			myMap = new ymaps.Map('map', {
				center: [59.901739, 30.319515],
				zoom: 17
			}, {
					searchControlProvider: 'yandex#search'
				});
			myPlacemark = new ymaps.Placemark([59.901739, 30.319515]);
			myMap.geoObjects.add(myPlacemark);
			myMap.behaviors.disable('drag');
		}
	}
	if ($('.we_offer_wrapper').length) {
		const gridItems = [{
			title: 'Единоборства',
			img: './assets/images/banner_img1.png',
			url: '#'
		}, {
			title: 'Тяжелая атлетика',
			img: './assets/images/banner_img2.png',
			url: '#'
		}, {
			title: 'Хоккей',
			img: './assets/images/banner_img3.png',
			url: '#'
		}, {
			title: 'Плавание',
			img: './assets/images/banner_img4.png',
			url: '#'
		}, {
			title: 'Кроссфит',
			img: './assets/images/banner_img5.png',
			url: '#'
		}, {
			title: 'Кардио тренировки',
			img: './assets/images/banner_img6.png',
			url: '#'
		}, {
			title: 'Кроссфит',
			img: './assets/images/banner_img5.png',
			url: '#'
		}, {
			title: 'Тяжелая атлетика',
			img: './assets/images/banner_img4.png',
			url: '#'
		}, {
			title: 'Кардио тренировки',
			img: './assets/images/banner_img3.png',
			url: '#'
		}, {
			title: 'Хоккей',
			img: './assets/images/banner_img2.png',
			url: '#'
		}, {
			title: 'Тяжелая атлетика',
			img: './assets/images/banner_img2.png',
			url: '#'
		}, {
			title: 'Плавание',
			img: './assets/images/banner_img1.png',
			url: '#'
		},
		];

		const grid = document.querySelector('.we_offer_wrapper');

		function renderGrid(el) {
			const item = document.createElement('div');
			item.style.background = 'url(' + el.img + ')';
			item.style.backgroundSize = 'cover';
			item.classList.add('we_offer_item');
			const title = document.createElement('p');
			title.textContent = el.title;

			const link1 = document.createElement('a');
			link1.href = el.url;
			const button1 = document.createElement('div');
			button1.classList.add('button', 'grid_button', 'grid_get_started');
			button1.textContent = 'Начни уже сегодня';
			link1.appendChild(button1);

			const link2 = document.createElement('a');
			link2.href = el.url;
			const button2 = document.createElement('div');
			button2.classList.add('button', 'grid_button', 'grid_more');
			button2.textContent = 'Подробнее';
			link2.appendChild(button2);

			item.appendChild(title);
			item.appendChild(link1);
			item.appendChild(link2);
			grid.appendChild(item);
		}

		gridItems.forEach(el => {
			renderGrid(el);
		});

	}
	if ($('.swiper-container').length && $(window).width() < 768) {
		include('./js/vendors/swiper.min.js', function () {
			const slider = new Swiper('.swiper-container', {
				direction: 'horizontal',
				loop: true,
				speed: 400,
				autoplay: {
					delay: 2000,
				  },
			})
		})
	}

});