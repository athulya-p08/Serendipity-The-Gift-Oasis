// Check if localStorage is available
function supportsLocalStorage() {
    return typeof Storage !== "undefined";
  }
  
  // Add product to wishlist
  function addToWishlist(productId) {
    if (!supportsLocalStorage()) {
      alert("Your browser does not support local storage.");
      return;
    }
  
    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
    if (!wishlist.includes(productId)) {
      wishlist.push(productId);
      localStorage.setItem("wishlist", JSON.stringify(wishlist));
      alert("Product added to wishlist!");
    } else {
      alert("Product is already in wishlist.");
    }
  }
  
  // Remove product from wishlist
  function removeFromWishlist(productId) {
    if (!supportsLocalStorage()) {
      alert("Your browser does not support local storage.");
      return;
    }
  
    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
    wishlist = wishlist.filter(id => id !== productId);
    localStorage.setItem("wishlist", JSON.stringify(wishlist));
    alert("Product removed from wishlist.");
    displayWishlist();
  }
  
  // Display wishlist
  function displayWishlist() {
    if (!supportsLocalStorage()) {
      alert("Your browser does not support local storage.");
      return;
    }
  
    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
    const wishlistElement = document.getElementById("wishlist");
    wishlistElement.innerHTML = "";
  
    wishlist.forEach(productId => {
      const productElement = document.createElement("li");
      productElement.className = "wishlist-item";
      productElement.innerHTML = `
        <span>Product ${productId}</span>
        <button onclick="removeFromWishlist(${productId})">Remove</button>
      `;
      wishlistElement.appendChild(productElement);
    });
  }
  
  // Initialize wishlist page
  if (document.readyState !== 'loading') {
    if (document.getElementById("wishlist")) {
      displayWishlist();
    }
  } else {
    document.addEventListener('DOMContentLoaded', function () {
      if (document.getElementById("wishlist")) {
        displayWishlist();
      }
    });
  }
  