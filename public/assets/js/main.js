function addProduct()
{
    document.getElementById("product-add-btn")
    {
        location.href = "/addproduct"
    }
}

function saveProduct()
{

}

function cancel()
{
    document.getElementById("product-cancel-btn")
    {
        location.href = "/"
    }
}


function typeSwitcher()
{
    let e = document.querySelector("#productType").value;
    let dvd = document.querySelector(".dvd-container");
    let furniture = document.querySelector(".furniture-container")
    let book = document.querySelector(".book-container")
    if (e === "dvd")
    {
        dvd.style.display = "grid"
        book.style.display = "none"
        furniture.style.display = "none"
    }
    if (e === "furniture")
    {
        furniture.style.display = "grid"
        book.style.display = "none"
        dvd.style.display = "none"
    }
    if (e === "book")
    {
        book.style.display = "grid"
        dvd.style.display = "none"
        furniture.style.display = "none"
    }
}

function deleteProduct()
{
    //todo
}
