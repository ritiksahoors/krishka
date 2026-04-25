let wishlist = JSON.parse(localStorage.getItem("wishlist")) || []
        let cart = JSON.parse(localStorage.getItem("cart")) || []

        const wishlistCount = document.querySelectorAll(".icon-box .count")[0]
        const cartCount = document.querySelectorAll(".icon-box .count")[1]

        const wishlistBody = document.querySelector("#wishlistModal .modal-body")
        const cartBody = document.querySelector("#cartModal .modal-body")

        // -------------------
        // Load Data On Start
        // -------------------

        loadWishlist()
        loadCart()

        // -------------------
        // Add to Wishlist
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("fa-heart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: e.target.dataset.price,
                    img: e.target.dataset.img
                }

                wishlist.push(product)

                localStorage.setItem("wishlist", JSON.stringify(wishlist))

                loadWishlist()

                showToast("Added to Wishlist ❤️")
            }

        })

        // -------------------
        // Move Wishlist to Cart
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("fa-shopping-cart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: parseInt(e.target.dataset.price),
                    img: e.target.dataset.img,
                    qty: 1
                }

                cart.push(product)

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()

                showToast("Added to Cart 🛒")
            }

        })

        // -------------------
        // Add to Cart Direct
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("add-to-cart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: parseInt(e.target.dataset.price),
                    img: e.target.dataset.img,
                    qty: 1
                }

                cart.push(product)

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()

                showToast("Added to Cart 🛒")
            }

        })

        // -------------------
        // Qty Buttons
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("plus")) {

                let i = e.target.dataset.index

                cart[i].qty++

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()
            }

            if (e.target.classList.contains("minus")) {

                let i = e.target.dataset.index

                if (cart[i].qty > 1) {
                    cart[i].qty--
                }

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()
            }

        })

        // -------------------
        // Load Wishlist
        // -------------------

        function loadWishlist() {

            wishlistBody.innerHTML = ""

            wishlist.forEach((item, index) => {

                wishlistBody.innerHTML += `

        <div class="wishlist-item">

            <img src="${item.img}">

            <div class="wishlist-info">
                <h6>${item.name}</h6>
                <p>₹${item.price}</p>
            </div>

            <button class="gold-btn move-to-cart"
                data-index="${index}">
                Add to Cart
            </button>

        </div>
        `
            })

            wishlistCount.innerText = wishlist.length
        }

        // -------------------
        // Load Cart
        // -------------------

        function loadCart() {

            cartBody.innerHTML = ""

            let total = 0

            cart.forEach((item, index) => {

                total += item.price * item.qty

                cartBody.innerHTML += `

        <div class="cart-item">

            <img src="${item.img}">

            <div class="cart-info">

                <h6>${item.name}</h6>
                <p>₹${item.price}</p>

                <div class="qty-box">

                    <button class="minus" data-index="${index}">-</button>
                    <span>${item.qty}</span>
                    <button class="plus" data-index="${index}">+</button>

                </div>

            </div>

            <p class="total">₹${item.price * item.qty}</p>

        </div>

        <hr>
        `
            })

            cartBody.innerHTML += `

    <div class="cart-summary">

        <h6>Total: ₹${total}</h6>

        <button class="gold-btn w-100"
            data-bs-toggle="modal"
            data-bs-target="#checkoutModal"
            data-bs-dismiss="modal">
            Proceed to Checkout
        </button>

    </div>
    `

            cartCount.innerText = cart.length
        }

        // -------------------
        // Place Order
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.innerText.includes("Place Order")) {

                showToast("Order Placed Successfully 🎉")

                cart = []

                localStorage.removeItem("cart")

                loadCart()

                setTimeout(() => {
                    location.reload()
                }, 2000)
            }

        })

        // -------------------
        // Toast
        // -------------------

        function showToast(msg) {

            let toast = document.createElement("div")

            toast.innerText = msg

            toast.style.position = "fixed"
            toast.style.bottom = "20px"
            toast.style.right = "20px"
            toast.style.background = "#000"
            toast.style.color = "#fff"
            toast.style.padding = "12px 20px"
            toast.style.borderRadius = "8px"
            toast.style.zIndex = "9999"

            document.body.appendChild(toast)

            setTimeout(() => {
                toast.remove()
            }, 3000)
        }

        document.querySelectorAll(".hover-icons a").forEach(btn => {
            btn.addEventListener("click", function (e) {
                e.preventDefault()
            })
        })

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

// =========================================

document.querySelector(".mega-parent > a").addEventListener("click", function(e){

    if(window.innerWidth < 991){
        e.preventDefault();
        this.parentElement.classList.toggle("active");
    }

});

document.querySelectorAll(".sub-parent").forEach(item => {

    item.addEventListener("click", function(e){

        if(window.innerWidth < 991){
            e.stopPropagation();
            this.classList.toggle("active");
        }

    });

});

// ========================================================

// Save product
let recent = JSON.parse(localStorage.getItem("recent")) || [];
recent.push(productData);
localStorage.setItem("recent", JSON.stringify(recent));