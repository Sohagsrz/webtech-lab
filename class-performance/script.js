var unitPrice = document.getElementById("unitPrice").value;

function calculate() {

    var quantityInput = document.getElementById("quantity");
    var totalPriceInput = document.getElementById("totalPrice");
    var errormsg = document.getElementById("errormsg");

    var qty = quantityInput.value;

    if (qty < 0) {
        quantityInput.value = 0;
        qty = 0;
        errormsg.innerHTML = "Quantity cannot be negative. Reset to 0.";
    } else {
        errormsg.innerHTML = "";
    }

    var total = unitPrice * qty;
    totalPriceInput.value = total;

    if (total > 1000) {
        alert("Congratulations! You are eligible for a Gift Coupon!");
    }

}
