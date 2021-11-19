// GSAP Animation
// Nav
gsap.from('.logo', {
    opacity: 0,
    duration: 1,
    delay: 2,
    y: 10
})
gsap.from('.judul, .navbar', {
    opacity: 0,
    duration: 1,
    delay: 2.2,
    y: 30,
    stagger: 0.2
})

// Home
gsap.from('.content h3', {
    opacity: 0,
    duration: 1,
    delay: 1.6,
    y: 30
})
gsap.from('.content p, .atau', {
    opacity: 0,
    duration: 1,
    delay: 1.8,
    y: 30
})
gsap.from('.url, .btn', {
    opacity: 0,
    duration: 1,
    delay: 2.1,
    y: 30
})
gsap.from('.image', {
    opacity: 0,
    duration: 1,
    delay: 1.3,
    y: 30
})

// about






// Tombol Upload
const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})


// Kalau Mau User Bisa Keluar Tanpa Tekan X
// overlay.addEventListener('click', () => {
//     const modals = document.querySelectorAll('.modal.active')
//     modals.forEach(modal => {
//         closeModal(modal)
//     })
// })

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal')
        closeModal(modal)
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}