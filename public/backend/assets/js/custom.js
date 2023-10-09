const pnOne = document.getElementById("pnone");
const cardTable = document.getElementById("card-table");
cardTable.style.display = "none";

pnOne.addEventListener("click", function () {
    cardTable.style.display = "block";
});
