const faqSection = document.querySelector('.faq')
const categoryList = document.querySelector('.faq_categories_list');
const categoryListItems = categoryList.getElementsByClassName('faq_category_item')
// const categoryLinkItems = categoryList.getElementsByClassName('faq_category_item_link')
const categoryItemsArray = Array.from(categoryListItems)
const faqContent = document.querySelector('.faq_list')

const menuIcon = document.querySelector('.wrapper_nav_icon_burger')
const menu = document.querySelector('.nav_header_mobile')
const closeIcon = document.querySelector('.wrapper_icon_cross')

const slider = document.querySelector('.wrapper_slider')
const sliderItems = document.getElementsByClassName('wrapper_slide_content')
const slideIndicatorItems = document.getElementsByClassName('slide_indicator')
const slideIndicatorItemsArray = Array.from(slideIndicatorItems)
let sliderItemsArray = Array.from(sliderItems)
let screenWidth = document.body.clientWidth 
let slideWidth = 0
let animation
let activeSlideIndicator = slideIndicatorItemsArray[0].style.backgroundColor = 'rgba(48, 90, 239, .82)'
let notActiveSlideIndicator

menuIcon.onclick = () => {
    menu.style.transform = 'translateY(0)'
    menu.style.transition = 'transform 1s'
}

closeIcon.onclick = () => {
    menu.style.transform = 'translateY(-360px)'
    menu.style.transition = 'transform 1s'
}

categoryList.firstElementChild.classList.toggle('active')
categoryItemsArray.forEach(item => {
    item.onclick = e => {
        e.preventDefault()
        
        categoryItemsArray.forEach(item => {
            if(item.classList[1] == 'active') {
                item.classList.toggle('active')
            }
        })

        item.classList.toggle('active')
        
        const categoryLinkItem = item.querySelector('.faq_category_item_link')
        const categoryID = categoryLinkItem.dataset.category
        faqContent.animate({opacity: 0.5}, 300)
        const request = new XMLHttpRequest()
        const data = 'action=load_posts' + '&categoryID=' + categoryID
        request.open("POST", ajax.url, true)
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {       
                faqContent.innerHTML = request.response
                openCloseAnswer()
            }
        })
        request.send(data)
    }
})

function slideAnimation() {
    for(let i = 0; i < sliderItemsArray.length; i++) {
        animation = setTimeout(() => {
            if(i < 2) {
                activeSlideIndicator = slideIndicatorItemsArray[i+1].style.backgroundColor = 'rgba(48, 90, 239, .82)'
                notActiveSlideIndicator = slideIndicatorItemsArray[i].style.backgroundColor = 'rgba(240, 240, 240, .82)'
            } else {
                activeSlideIndicator = slideIndicatorItemsArray[0].style.backgroundColor = 'rgba(48, 90, 239, .82)' 
                notActiveSlideIndicator = slideIndicatorItemsArray[2].style.backgroundColor = 'rgba(240, 240, 240, .82)'   
            }

            slider.style.transition = 'left 2s ease-out'
            slideWidth = screenWidth * -(i + 1)
            if(slideWidth > -screenWidth * sliderItemsArray.length) {
                slider.style.left = slideWidth + 'px'
            } else {
                slider.style.left = '0'
                slideAnimation()
            }      
        }, (i + 1) * 8000)   
    }
}

slideAnimation()
window.addEventListener("resize", () => {
    screenWidth = document.body.clientWidth
    clearTimeout(animation)
    slideAnimation()
});

const instrumentsListItems = document.getElementsByClassName('instruments_list_item');
const instrumentsListItemsArray = Array.from(instrumentsListItems);
const btnShowMore = document.querySelector('.service_btn');

let clickCounter = 0;
if(btnShowMore) {
	btnShowMore.addEventListener('click', event => {
        event.preventDefault()
		++clickCounter
		const itemsPerClick = 3

		let itemNum = itemsPerClick * clickCounter
		let stopPoint = itemNum + itemsPerClick

		if(itemNum < instrumentsListItemsArray.length) {
			
			for(let i = itemNum; i < stopPoint; i++) {
				if(i < instrumentsListItemsArray.length) {
					instrumentsListItemsArray[i].style.display = 'flex'
				} else {
					btnShowMore.firstChild.textContent = "Show less"
                    btnShowMore.firstElementChild.style.transform = 'rotate(180deg)'
                    btnShowMore.firstElementChild.style.transition = 'transform 1s' 
				}
			}
		
		} else {

			itemNum = instrumentsListItemsArray.length - 1
			stopPoint = itemNum - itemsPerClick * clickCounter
			for(let i = itemNum; i > stopPoint; i--) {
				if(i >= itemsPerClick) {
					instrumentsListItemsArray[i].style.display = 'none'
				} 
			}
			btnShowMore.firstChild.textContent = "Show more"
            btnShowMore.firstElementChild.style.transform = 'rotate(0deg)' 
            btnShowMore.firstElementChild.style.transition = 'transform 1s'
			clickCounter = 0;
		} 	
	});
}

function openCloseAnswer() {
    const questionItems = document.getElementsByClassName('wrapper_faq_content')
    const questionItemsArray = Array.from(questionItems)
    questionItemsArray.forEach(item => {
        const answerItem = item.querySelector('p') 
        const questionIconArrow = item.querySelector('.wrapper_faq_question .icon_arrow') 
        const questionIconArrowColor = item.querySelector('.wrapper_faq_question .icon_arrow path')
        item.onclick = () => {             
            if(item.classList[1] != 'active') {
                answerItem.style.display = 'block' 
                questionIconArrow.style.transform = 'rotate(0deg)' 
                questionIconArrowColor.style.fill = 'var(--decoration-color-2)'
                questionIconArrow.style.transition = 'transform 1s'
                item.classList.toggle('active')  
            } else {
                answerItem.style.display = 'none'  
                item.classList.toggle('active') 
                questionIconArrow.style.transform = 'rotate(-90deg)'
                questionIconArrowColor.style.fill = 'var(--decoration-color-4)'  
                questionIconArrow.style.transition = 'transform 1s'  
            }    
        }
    })
}

openCloseAnswer()