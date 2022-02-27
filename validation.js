function validation(formId) {
        const form1 = document.getElementById(`${formId}`)
    // console.log(form1['ten'].value.trim().toLowerCase() )
    // console.log(form1)
    function check(inputElement, regex = '', message) {
        let inputCheck = form1[inputElement];
        let check
        inputCheck.onblur = function (e) {
            if (typeof regex === 'object'){
                check = regex.test(e.target.value.trim())
            }
            else {
                check = (e.target.value.trim() === form1['password'].value.trim())
            }
            if(check) {
                inputCheck.nextElementSibling.classList.remove('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.remove('invalid')
                inputCheck.nextElementSibling.innerHTML = ''
            } else if (!check) {
                inputCheck.nextElementSibling.classList.add('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.add('invalid')
                inputCheck.nextElementSibling.innerHTML = message
            }
        }
        inputCheck.onfocus = function () {
            inputCheck.nextElementSibling.classList.remove('invalid-message')
            inputCheck.nextElementSibling.previousElementSibling.classList.remove('invalid')
            inputCheck.nextElementSibling.innerHTML = ''
        }
    }
    // check('username',/^[A-z][A-z0-9]+$/,"vui lòng nhập đúng định dạng")
    check(
        'password',
        /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/,
        "Mật khẩu yếu")
    check('repeat','',"vui lòng nhập đúng với mật khẩu")
    check('ho',/\w+\D+/,"Vui lòng nhập họ")
    check('ten',/\w+\D+/,"Vui lòng nhập Tên")
    
    // check('phone',/^[0-9]{12}$/,"vui lòng nhập 12 số điện thoại")
    function emailEx(str, inputCheck) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            if (this.responseText === '1') {
                inputCheck.nextElementSibling.classList.remove('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.remove('invalid')
                inputCheck.nextElementSibling.innerHTML = ''
            } 
            else {
                inputCheck.nextElementSibling.classList.add('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.add('invalid')
                inputCheck.nextElementSibling.innerHTML= this.responseText;
            }
        }
        xhttp.open("GET", "checkemail.php?email="+str);
        xhttp.send();
    };

    function checkEmail(inputElement, regex = '', message) {
        let inputCheck = form1[inputElement];
        let check
        inputCheck.onblur = function (e) {
            if (typeof regex === 'object'){
                check = regex.test(e.target.value.trim())
            }
            if(check) {
                inputCheck.nextElementSibling.classList.remove('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.remove('invalid')
                inputCheck.nextElementSibling.innerHTML = ''
                emailEx(this.value,this);
            } else if (!check) {
                inputCheck.nextElementSibling.classList.add('invalid-message')
                inputCheck.nextElementSibling.previousElementSibling.classList.add('invalid')
                inputCheck.nextElementSibling.innerHTML = message
            }
        }
        inputCheck.onfocus = function () {
            inputCheck.nextElementSibling.classList.remove('invalid-message')
            inputCheck.nextElementSibling.previousElementSibling.classList.remove('invalid')
            inputCheck.nextElementSibling.innerHTML = ''
        }
    }
    checkEmail(
        'email',
        /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/,
        "email invalid")    


        
    form1.onsubmit = function(event) {
        let result = false;
        // event.preventDefault();
        const formLength = form1.length
        let count = 0
        for (let i = 0; i < formLength-1; i++) {
            if (form1[i].value.trim() === ''){
                $('.modal-signup .title-message').textContent = 'Vui lòng nhập đầy đủ và đúng định dạng'
                count++
            }
        }
        // if (form1['password'].value.toLowerCase().includes(form1['ten'].value.trim().toLowerCase())) {
        //     form1['password'].nextElementSibling.classList.add('invalid-message')
        //     form1['password'].nextElementSibling.previousElementSibling.classList.add('invalid')
        //     form1['password'].nextElementSibling.innerHTML = 'Mật khẩu không chứa tên người dùng'
        //     count++
        // }
        if (count === 0 ){
            // console.log('đang chuyển hướng trang web...')
            result = true
        }

        return result
    }

}
validation('signup-form')


 
// var signinResult = false;
// kiểm tra đăng nhập
    const signinEmail = $('.signin-email')
    const signinPassword = $('.signin-password')
    const signinSubmit = $('.signin-submit')   
    signinEmail.onclick = (e) => {
        console.log(e)
    }
    signinSubmit.onclick = function (e) {
        // e.preventDefault();
        let result = false;
        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                // console.log(this.responseText)
                if (this.responseText.trim() !== '1') {
                    $('.modal-signin .title-message').innerHTML = this.responseText;
                    console.log(this.responseText)
                    result = false;
                    // return result;
                } else if (this.responseText.trim() === '1'){
                    console.log(this.responseText)
                    $('#signin-form').submit();
                    result = false;
                    // return result;    
                }
            }
            xhttp.open("POST", "signinvalidation.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`email=${signinEmail.value}&password=${signinPassword.value}`); 
            // console.log(signinResult)
        }
        loadDoc();
        return result;
    }




const getName = $('.getName');
$('.submit-fav').onclick = function (e) {
    function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log(this.responseText)
            if (this.responseText === '0'){
                window.location.href ='./Sign.php';
            }
            else if (this.responseText === '1') {
                $('.noti-fav').textContent = 'You have been liked this product!';
                setTimeout(() => {
                    $('.noti-fav').textContent = '';
                }, 3000);
            }
            else {
                window.location.href = this.responseText;
            }
        }
        xhttp.open("POST", "checkfav.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(`name=${getName.innerHTML}`); 
        // console.log(signinResult)
    };
    loadDoc();
}

$('.submit-add').onclick = function (e) {
    e.preventDefault();
    let count = 0;
    let size;
    for (i = 0 ; i < document.forms['product-form'].length-1; i++) {
        if (document.forms['product-form'][i].checked) {
            count++;
            size = document.forms['product-form'][i].value;
        }
    }
    if (count === 0) {
        $('.product-size--chart').classList.add('size-board--warn')
        $('.product-size--chart').classList.remove('size-board-nor')
        setTimeout(() => {
            $('.product-size--chart').classList.remove('size-board--warn')
            $('.product-size--chart').classList.add('size-board-nor')
        }, 3000); 
    } else {
        const getName = $('.getName');
        // $('.product-form').onclick = function (e) {
            function loadDoc1() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    console.log(this.responseText)
                    if (this.responseText.trim() === '0'){
                        window.location.href ='./Sign.php';
                    }
                    else if (this.responseText.trim() === '1') {
                        $('.noti-cart').textContent = 'You have been add this product!';
                        setTimeout(() => {
                            $('.noti-cart').textContent = '';
                        }, 3000);
                    }
                    else {
                        window.location.href = this.responseText;
                    }
                }
                xhttp.open("POST", "checkfav.php");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(`size=${size}&mshh=${getName.innerHTML}`); 
            };
            loadDoc1();
            // }
        }
        
    }
    


// const deleteBtn = $$('.delete-container');
// function handleDel(){
//     console.log("Xử lý xóa")
//     // console.log($('.fav-capa').innerHTML)
//     for (let i = 0 ; i < parseInt($('.fav-capa').innerHTML); i++) {
//         console.log('lap lan thu: ',i )
//         deleteBtn[i].onclick = function (e) {
//             // console.log("Đã click: ",deleteBtn[i])  
//             function loadDoc() {
//                 const xhttp = new XMLHttpRequest();
//                 xhttp.onload = function() {
//                     console.log(this.responseText)
//                     $('.fav-capa').innerHTML--
//                     $('.fav-pop-container').innerHTML= this.responseText 
//                     // handleDel();
//                 }
//                 xhttp.open("POST", "checkfav.php");
//                 xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//                 xhttp.send(`idDelFav="${deleteBtn[i].attributes[1].value}"`); 
//             }
//             loadDoc();
//         }
//     }
// }
// handleDel();

