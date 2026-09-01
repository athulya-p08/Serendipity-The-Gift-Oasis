// Get references to the wishlist and cart count elements
const wishlistCountElement = document.querySelector(".icon .bx-heart + span");

const cartCountElement = document.getElementById("cart-count");

// Function to update the wishlist count
function updateWishlistCount(count) {
  wishlistCountElement.textContent = count;
}

// Function to update the cart count
function updateCartCount(count) {
  cartCountElement.textContent = count;
}

// Example: Simulating adding items
let wishlistCount = 0;
let cartCount = 0;

document.querySelector("#add-to-wishlist").addEventListener("click", () => {
  wishlistCount++;
  updateWishlistCount(wishlistCount);
});

document.querySelector("#add-to-cart").addEventListener("click", () => {
  cartCount++;
  updateCartCount(cartCount);
});
