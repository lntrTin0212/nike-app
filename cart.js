function validation(formId) {
    const form1 = document.querySelector(`#${formId}`)
    // console.log(form1['ten'].value.trim().toLowerCase() )
    // console.log(form1)
    function check(inputElement, regex = '', message) {
        let inputCheck = form1[inputElement];
        let check
        inputCheck.onblur = function (e) {
            if (typeof regex === 'object'){
                check = regex.test(e.target.value.trim())
            }
            if(check) {
                inputCheck.style.color = '';
                inputCheck.classList.remove('invalid')
                inputCheck.placeholder = ''
            } else if (!check) {
                inputCheck.style.color = 'rgb(141, 27, 27)';
                inputCheck.classList.add('invalid')
                inputCheck.placeholder = message

            }
        }
        inputCheck.onfocus = function () {
            inputCheck.style.color = '';
                inputCheck.classList.remove('invalid')
                inputCheck.placeholder = ''
        }
    }
    // check('username',/^[A-z][A-z0-9]+$/,"vui lòng nhập đúng định dạng")
    check('info-customer',/\w+\D+/,"name dont have a integer")
    check('info-address',/^.+$/,"Please give us your Address")
    check('info-phoneNum',/[0-9]{10}/,"Phone number has 10 charater")
    check('info-faxNum',/[0-9]{10}/,"Fax number has 10 charater")
    
    form1.onsubmit = function(event) {
        let result = false;
        // event.preventDefault();
        const formLength = form1.length
        console.log(form1);
        let count = 0
        for (let i = 0; i < formLength-1; i++) {
            if (form1[i].value.trim() === ''){
                if (form1[i] === form1['info-company']) {
                    continue
                }
                $('.title-message').style.visibility = 'visible'
                setTimeout(() => {
                    $('.title-message').style.visibility = 'hidden'  
                }, 2000);
                count++
                console.log(form1[i])
            }
        }
        if (count === 0 ){
            // function handlePayOut(){
            //     console.log("Xử lý xóa")
            //     // console.log($('.fav-capa').innerHTML)
            //     for (let i = 0 ; i < parseInt($('.fav-capa').innerHTML); i++) {
            //         console.log('lap lan thu: ',i )
            //         deleteBtn[i].onclick = function (e) {
            //             console.log("Đã click: ",deleteBtn[i])  
            //             function loadDoc() {
            //                 const xhttp = new XMLHttpRequest();
            //                 xhttp.onload = function() {
            //                     $('.fav-capa').innerHTML--
            //                     $('.fav-pop-container').innerHTML= this.responseText 
            //                     handleDel();
            //                 }
            //                 xhttp.open("POST", "payout.php");
            //                 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //                 xhttp.send(`idDelFav="${deleteBtn[i].attributes[1].value}"`); 
            //             }
            //             loadDoc();
            //         }
            //     }
            // }
            // handlePayOut();
            return true;
        }
        return false;
    }
}

validation('checkout-form');

