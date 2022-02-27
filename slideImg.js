function slideImg() {
    const getLength = $('.main-img').childElementCount
    init = 0;
    $('.main-img').children[getLength-1].classList.add('block')
    setInterval(() => {
        if (init == getLength) {
            init = 0
            $('.main-img').children[init].classList.add('block')
            for (let i = 0; i < getLength ;i++ ) {
                if (i == init) {
                    continue;
                }else {
                    $('.main-img').children[i].classList.remove('block')
                }
            }
        }
        else if (init < getLength) {
            $('.main-img').children[init].classList.add('block')
            for (let i = 0; i < getLength ;i++ ) {
                if (i == init) {
                    continue;
                }else {
                    $('.main-img').children[i].classList.remove('block')
                }
            }
        }
        init++
    }, 3000);  
}
slideImg()

$('.left').onclick = function (e) {
    $('.new-release-container').scrollLeft -= 800;
}

$('.right').onclick = function (e) {
    $('.new-release-container').scrollLeft += 800;
}

for (menu of $$('.menu-item')) {
    menu.onclick = function(e) {
       $('.main-product').scrollIntoView({  behavior: 'smooth' });
    }
}

$('.gotoTop').onclick = function () {
    window.scrollTo({ top: 0, behavior: 'smooth' })
}

