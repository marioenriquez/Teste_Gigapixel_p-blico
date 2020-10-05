console.log("Finanzas Gigapixel");

var client = ",";

console.log("Cliente: " + client);

var valReceipts = ",";
var valExpenses = ",";

var balanceFunc = require("./modules/calSaldo");

var finalValue = balanceFunc(valReceipts, valExpenses);

console.log("Saldo: R$ " + finalValue);
