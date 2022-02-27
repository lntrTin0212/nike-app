const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)
const staffEmail = $('.staff-email')
const staffPassword = $('.staff-password')
if($('.staff-submit')) {
    $('.staff-submit').onclick = function (event) {
        let result = false;
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                if (this.responseText.trim() !== '2') {
                    $('.modal-signin .title-message').innerHTML = this.responseText;
                    result = false;
                }
                if (this.responseText.trim() === '2'){
                    $('#signin-Staff').submit();
                    result = true;
                }
            }
            xhttp.open("POST", "signinvalidation.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`nameStaff=${staffEmail.value}&passwordStaff=${staffPassword.value}`); 
            // console.log(signinResult)
        };
        loadDoc();
        return result;
    }
}

for (link of $$('.menu-link')) {
    link.onclick = function(e) {
        if (this.nextElementSibling.childNodes[1].attributes[3].value.trim() === 'var(--verified)') {
            e.preventDefault();
            $('.popup-message').style.right = '0';
            console.log($('.popup-message'))
            setTimeout(() => {
                $('.popup-message').style.right = '-315px';
            }, 2000);
            $('.popup-message').lastElementChild.href = this.href
        }
        else  if (this.nextElementSibling.childNodes[1].attributes[3].value.trim() === 'var(--not-verify)'){
            return true;
        }
    }
}