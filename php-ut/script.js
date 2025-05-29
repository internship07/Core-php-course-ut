document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const productList = document.getElementById("product-list");
    const totalPriceElement = document.getElementById("total-price");
    const clearButton = document.getElementById("clear-form");

    let products = JSON.parse(localStorage.getItem("products")) || [];

    // Function to Render Products
    function renderProducts() {
        productList.innerHTML = "";
        let total = 0;
        products.forEach((product, index) => {
            const li = document.createElement("li");
            li.textContent = `${product.name} - ₹${product.price}`;
            li.style.animation = "fadeIn 0.5s ease-in";
            
            // Add delete button for individual items
            const deleteBtn = document.createElement("button");
            deleteBtn.textContent = "❌";
            deleteBtn.style.marginLeft = "10px";
            deleteBtn.onclick = () => {
                products.splice(index, 1);
                localStorage.setItem("products", JSON.stringify(products));
                renderProducts();
            };

            li.appendChild(deleteBtn);
            productList.appendChild(li);
            total += product.price;
        });

        totalPriceElement.textContent = `₹${total.toFixed(2)}`;
        totalPriceElement.style.animation = "blink 0.5s alternate 2";
        localStorage.setItem("products", JSON.stringify(products));
    }

    // Handle Form Submission
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        const name = form.querySelector("[name='product_name']").value;
        const price = parseFloat(form.querySelector("[name='product_price']").value);

        if (name && !isNaN(price)) {
            products.push({ name, price });
            renderProducts();
            form.reset();
        }
    });

    // Handle Clear Button (Reset Products)
    clearButton.addEventListener("click", () => {
        localStorage.removeItem("products");
        products = [];
        renderProducts();
    });

    // Run Initial Render on Page Load
    renderProducts();
});