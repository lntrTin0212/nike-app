
const init = [
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/1247b6df-7b02-44cc-8775-1862dc44b204/jordan-one-take-ii-pf-basketball-shoe-m666jq.png",
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/9e220418-44b6-42ea-9211-ef5130ac48a1/jordan-one-take-ii-pf-basketball-shoe-m666jq.png",
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/1247b6df-7b02-44cc-8775-1862dc44b204/jordan-one-take-ii-pf-basketball-shoe-m666jq.png",
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/c824f5fa-e1f5-46bc-8d47-b7f1dd24ac5d/jordan-one-take-ii-pf-basketball-shoe-m666jq.png",
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/2a6b81f1-03d1-4ef6-a203-4ece983b14f2/jordan-one-take-ii-pf-basketball-shoe-m666jq.png",
    "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/6acfa67b-5866-4546-92ca-bcfb629ce01f/jordan-one-take-ii-pf-basketball-shoe-m666jq.png"
]

const render = init.map((product,index) => {
return  `<div class="product-wrapper" data-index='${index}'>
            <a href='' class="img-detail">
                <img src="${product}" alt="">
            </a>
        </div>`
}
).join('')

$('.product-img').innerHTML = render

