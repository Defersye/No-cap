//calculating
let sub = document.getElementById("payment_sub").innerHTML.split("");
let subNums = 0;
for (let i = 1; i < sub.length; i++) {
   subNums += sub[i];
}
console.log(subNums);

let discount = document.getElementById("payment_discount").innerHTML.split("");
let discountNums = 0;
for (let i = 1; i < discount.length; i++) {
   discountNums += discount[i];
}
console.log(discountNums);

let total = document.getElementById("payment_total");
let echo = subNums - discountNums;
total.innerHTML = "&euro;" + echo;
