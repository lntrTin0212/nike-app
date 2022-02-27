const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
$('.joinUs-link').onclick = () => {
    $(".modal-signup").classList.add('open-modal')
    $(".modal-signin").classList.remove('open-modal')

}
$('.signIn-link').onclick = () => {
    $(".modal-signin").classList.add('open-modal')
    $(".modal-signup").classList.remove('open-modal')
}