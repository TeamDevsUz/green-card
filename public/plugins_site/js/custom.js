//Lang
document.querySelectorAll('.lang').forEach((lang) => {
    lang.children[0].addEventListener('click', (e) => {
        e.stopPropagation()
        lang.children[1].classList.toggle('active')
    })
})

for (let list of document.querySelectorAll('.lang__list')) {
    list.addEventListener('click', (e) => {
        e.stopPropagation()
    })
}

document.querySelector('body').addEventListener('click', () => {
    for (let list of document.querySelectorAll('.lang__list')) {
        list.classList.remove('active')
    }
})


