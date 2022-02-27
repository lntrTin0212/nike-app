const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

$('.submit-nvCheck').onclick = function (e) {
    function loadDoc() {
        let orderNumber = $('.sd');
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            // console.log(this.responseText)           
            if (this.responseText.trim() === '1') {
                window.location.href ='./NV_signin.php';
            }
        }
        xhttp.open("POST", "checkfav.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`orderNum=${orderNumber.innerHTML}`); 
        // console.log(signinResult)
    };
    loadDoc();
    return false;
}

