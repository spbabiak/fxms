const faqSection = document.querySelector('.faq')
const categoryList = document.querySelector('.faq_categories_list');
const categoryItems = categoryList.getElementsByClassName('faq_category_item_link')
const categoryItemsArray = Array.from(categoryItems)
const faqContent = document.querySelector('.faq_list')

const menuIcon = document.querySelector('.wrapper_nav_icon_burger')
const menu = document.querySelector('.nav_header_mobile')
const closeIcon = document.querySelector('.wrapper_icon_cross')

let categoryID

menuIcon.addEventListener('click', () => {
    menu.style.transform = 'translateY(0)'
})

closeIcon.addEventListener('click', () => {
    menu.style.transform = 'translateY(-360px)'
})

categoryItemsArray.forEach(item => {
    item.addEventListener('click', e => {
        e.preventDefault()    
       
        categoryID = item.dataset.category   
        console.log(categoryID)
        faqContent.animate({opacity: 0.5}, 300)
        const request = new XMLHttpRequest()
        const data = 'action=load_posts' + '&categoryID=' + categoryID
        request.open("POST", ajax.url, true)
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {       
                faqContent.innerHTML = request.response
            }
        })
        request.send(data)
    })
})