const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
const signIn = $('.link-signin')
const signUp = $('.link-signup')
const escModal = $('.modal-time')
const signInOpen = $('.modal-signin .open')
const modal = $('.modal')
const aboutModal = $('.about-modal-button')
const sizeModal = $('.size-chart-wrapper')
const male = $('.gender-male')
const feMale = $('.gender-female')
const genderSign = $$('.signup-gender')
const dob = $('.date-of-birth')
for (NavLink of $$('.type-link')) {
    NavLink.onclick = function (e) {
        let TypeNumber = this.attributes[0].value
        let Name = this.innerHTML
        console.log(TypeNumber)
    function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // console.log(this.responseText)           
                $('.product-grid').innerHTML = this.responseText;
                $('.product-capa').innerHTML = $('.product-grid').childElementCount
                $('.product-sortBy').innerHTML = Name
                // document.documentElement.scrollBy(product-grid)
            }
        xhttp.open("POST", "grid_product.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`type=${TypeNumber}`); 
        // console.log(signinResult)
    };
    loadDoc();
    return false;
    }
}

for (ColorList of $$('.colour')) {
    ColorList.onclick = function (e) {
        let color = this.attributes[1].value
        // let NameColor = this.innerHTML
    function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(color)           
                $('.product-grid').innerHTML = this.responseText;
                $('.product-capa').innerHTML = $('.product-grid').childElementCount
                // $('.product-sortBy').innerHTML = Name
                // document.documentElement.scrollBy(product-grid)
            }
        xhttp.open("POST", "checkfav.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`color=${color}`); 
        // console.log(signinResult)
    };
    loadDoc();
    return false;
    }
}

function sign (Element, visible, hidden) {
    Element.onclick = () => {
        $(".modal").classList.add('open')
        // $(".modal-container").classList.add('open')
        visible.classList.add('open-modal')
        hidden.classList.remove('open-modal')
        $('.map').classList.remove('open-modal')
        modal.attributes[1].value = true
    }
}
sign(signIn,$(".modal-signin"),$(".modal-signup"))
sign(signUp,$(".modal-signup"),$(".modal-signin"))

escModal.onclick = () => {
    $(".modal").classList.remove('open')
    // $(".modal-container").classList.remove('open')
    // $(".modal-signin").classList.remove('open-modal')
    // $(".modal-signup").classList.remove('open-modal')
    modal.attributes[1].value = false
}

document.onkeydown = (e) => {
    if (e.keyCode === 27) {
        $(".modal").classList.remove('open')
        $('.modal-product-container').classList.remove('modal-product-open')
        $('.size-chart').classList.remove('size-chart-pop')
        $('.size-chart-wrapper').classList.remove('on-chart')
        // $(".modal-container").classList.remove('open')
        // $(".modal-signin").classList.remove('open-modal')
        // $(".modal-signup").classList.remove('open-modal')
        modal.attributes[1].value = false
    }
}
modal.onclick = function (e) {
    if ( e.target !== this )
        return;
    else {
        $(".modal").classList.remove('open')
        $('.modal-product-container').classList.remove('modal-product-open')

        // $(".modal-container").classList.remove('open')
        // $(".modal-signin").classList.remove('open-modal')
        // $(".modal-signup").classList.remove('open-modal')
        modal.attributes[1].value = false
    }
    
}
$('.header-map').onclick = function() {
    $(".modal").classList.add('open')
    $('.map').classList.add('open-modal')
    $(".modal-signup").classList.remove('open-modal')
    $(".modal-signin").classList.remove('open-modal')
    modal.attributes[1].value = true
    // console.log(1)
}
// gender



// console.log(genderSign)
genderSign[0].checked =true
genderSign[0].nextElementSibling.style.visibility = 'visible'

$('.gender-container').onclick = (e) => {
    for (x of genderSign) {
        if (x.checked === true){
            x.nextElementSibling.style.visibility = 'visible'
        }
        else {
            x.nextElementSibling.style.visibility = 'hidden'
        }
    }
}
// END gender

// Change form
$('.joinUs-link').onclick = () => {
    $(".modal-signup").classList.add('open-modal')
    $(".modal-signin").classList.remove('open-modal')

}
$('.signIn-link').onclick = () => {
    $(".modal-signin").classList.add('open-modal')
    $(".modal-signup").classList.remove('open-modal')
}
// END change form

$('.submit-modal').onclick = () => {
    $('.modal-product-container').classList.add('modal-product-open')
    console.log(1);
}

$('.modal-time-details').onclick = () => {
    $('.modal-product-container').classList.remove('modal-product-open')
    // console.log(e)
}
$('.modal-product-container').onclick = (e) => {
    console.log(1)

    if (e.target !== $('.modal-product-container')) {
        return;
    }
    else {
        $('.modal-product-container').classList.remove('modal-product-open')
    }
}
$('.show-size-chart').onclick = (e) =>  {
    console.log(1);
    $('.size-chart').classList.add('size-chart-pop')
    $('.size-chart-wrapper').classList.add('on-chart')
}

$('.size-times').onclick = () => {
    $('.size-chart').classList.remove('size-chart-pop')
    $('.size-chart-wrapper').classList.remove('on-chart')
}
sizeModal.onclick = function(e) {
    if (e.target !== this ) {
        return;
    }
    else {
        $('.size-chart').classList.remove('size-chart-pop')
        $('.size-chart-wrapper').classList.remove('on-chart')
    }
}


