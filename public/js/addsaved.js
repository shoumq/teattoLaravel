let productsArr = document.querySelectorAll("[data-saved='false']");

console.log(productsArr)
let templateCode = `
    <a class="col-xs-3 col-md-3" style="color: black" data-saved="false" href="">
        <div class="col-sm card_product px-3 pt-3">
            <div class="d-flex" style="justify-content: space-between;">
                <p class="sale px-3 py-1">Скидка 1212</p>
                <button class="like_btn mb-2">
                    <i class="bi bi-heart mt-2"></i>
                </button>
            </div>
            <img src="https://miro.medium.com/max/2400/2*Rrb0s3_J2rOpz0hcBnCjrA.jpeg" alt="">
            <p class="id">1212</p>
            <p class="name">{{ $product->title }}</p>
            <div class="d-flex">
                <del>1212 ₽</del>
                <p class="price">1212ce ₽</p>
            </div>
        </div>
    </a>
`;

let template = Handlebars.compile(templateCode);

let productsContainer = document.querySelector("#productsContainer");

productsContainer.innerHTML = "";


for (let i = 0; i < 3; i++) {
    productsContainer.innerHTML += template(i);
}
