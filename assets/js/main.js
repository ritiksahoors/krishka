// ================= VARIABLES =================

const priceRange = document.getElementById("priceRange")
const priceValue = document.getElementById("priceValue")

let visibleProducts = 6
let loadStep = 6

// ================= INITIAL LOAD =================

document.addEventListener("DOMContentLoaded", function () {

    // price show
    priceValue.innerText = priceRange.value

    // all products filtered by default
    document.querySelectorAll(".product").forEach(product => {
        product.classList.add("filtered")
    })

    showProducts()
})

// ================= PRICE RANGE =================

priceRange.addEventListener("input", function () {

    priceValue.innerText = this.value
    filterProducts()

})

// ================= CATEGORY FILTER =================

document.querySelectorAll(".filter-category").forEach(cb => {
    cb.addEventListener("change", filterProducts)
})

// ================= FABRIC FILTER =================

document.querySelectorAll(".filter-fabric").forEach(cb => {
    cb.addEventListener("change", filterProducts)
})

// ================= COLOR FILTER =================

document.querySelectorAll(".filter-color").forEach(cb => {
    cb.addEventListener("change", filterProducts)
})

// ================= SHOW PRODUCTS =================

function showProducts() {

    let products = document.querySelectorAll(".product.filtered")

    let count = 0

    products.forEach(product => {

        if (count < visibleProducts) {

            product.style.display = "block"
            count++

        } else {

            product.style.display = "none"

        }

    })

}

// ================= FILTER FUNCTION =================

function filterProducts() {

    let maxPrice = priceRange.value

    let selectedCategories = []
    let selectedFabrics = []
    let selectedColors = []

    let visibleCount = 0

    document.querySelectorAll(".filter-category:checked").forEach(cb => {
        selectedCategories.push(cb.value)
    })

    document.querySelectorAll(".filter-fabric:checked").forEach(cb => {
        selectedFabrics.push(cb.value)
    })

    document.querySelectorAll(".filter-color:checked").forEach(cb => {
        selectedColors.push(cb.value)
    })

    document.querySelectorAll(".product").forEach(product => {

        let price = Number(product.dataset.price)
        let category = product.dataset.category
        let fabric = product.dataset.fabric
        let color = product.dataset.color

        let showCategory =
            selectedCategories.length === 0 ||
            selectedCategories.includes(category)

        let showFabric =
            selectedFabrics.length === 0 ||
            selectedFabrics.includes(fabric)

        let showColor =
            selectedColors.length === 0 ||
            selectedColors.includes(color)

        let showPrice = price <= maxPrice

        if (showCategory && showFabric && showColor && showPrice) {

            product.classList.add("filtered")
            visibleCount++

        } else {

            product.classList.remove("filtered")
            product.style.display = "none"

        }

    })

    visibleProducts = 6
    showProducts()

    if (visibleCount === 0) {

        document.getElementById("noProducts").style.display = "block"

    } else {

        document.getElementById("noProducts").style.display = "none"

    }

}

// ================= SCROLL LOAD =================

window.addEventListener("scroll", function () {

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 150) {

        loadMoreProducts()

    }

})

// ================= LOAD MORE =================

function loadMoreProducts() {

    let products = document.querySelectorAll(".product.filtered")

    if (visibleProducts >= products.length) return

    let loader = document.getElementById("loader")

    if (loader) loader.style.display = "block"

    setTimeout(() => {

        visibleProducts += loadStep

        showProducts()

        if (loader) loader.style.display = "none"

    }, 1000)

}

// ================= CLEAR FILTER =================

function clearFilters() {

    document.querySelectorAll("input[type=checkbox]").forEach(cb => cb.checked = false)

    priceRange.value = 6000
    priceValue.innerText = 6000

    document.querySelectorAll(".product").forEach(product => {
        product.classList.add("filtered")
    })

    visibleProducts = 6

    showProducts()

    document.getElementById("noProducts").style.display = "none"

}

// ================= WISHLIST =================

function toggleWishlist(event, el) {

    event.stopPropagation()
    el.classList.toggle("active")

}

// ================= CART =================

function addToCart(event, name, price) {

    event.stopPropagation()

    alert(name + " added to cart 🛒")

}

// ================= WHATSAPP =================

function orderWhatsApp(event, name, price) {

    event.stopPropagation()

    let msg = `Hello, I want to buy ${name} for ₹${price}`

    window.open(`https://wa.me/918117049431?text=${encodeURIComponent(msg)}`)

}

// ================= PRODUCT DETAILS =================

function goToDetails(card) {

    let name = card.dataset.name
    let price = card.dataset.price
    let img = card.dataset.img
    let category = card.dataset.category

    let url = `product-details.html?name=${name}&price=${price}&img=${img}&category=${category}`

    window.location.href = url

}

// Contact Form Submit

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("contactForm");

    if (form) {

        form.addEventListener("submit", function (e) {

            e.preventDefault();

            alert("Message Sent Successfully!");

            form.reset();

        });

    }

});