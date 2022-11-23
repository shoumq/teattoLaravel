let countPrMin = document.getElementById("countPrMin");
let countPrPlus = document.getElementById("countPrPlus");
let countPrInput = document.getElementById("countPrInput");
let productCount = document.getElementById("product_count");

countPrMin.addEventListener("click", () => {
    if (countPrInput.value <= 0) {
        countPrInput.value = 0;
        productCount.value = 0;
    } else {
        countPrInput.value--;
        productCount.value--;
    }
});

countPrPlus.addEventListener("click", () => {
    countPrInput.value++;
    productCount.value++;
});
