function addProduct()
{
    $("#product-add-btn")
    {
        location.href = "/addproduct"
    }
}

function saveProduct() {
    let dataForSend = {}

    let inputs = Array.from($("#product-form input"))

    inputs = inputs.filter(i => i.value)
    inputs.forEach(i => dataForSend[i.id] = i.value )

    dataForSend["product_type"] = $("#productType").val()

    $.ajax({
        type: "POST",
        url: "addproduct",
        data: dataForSend,
    }).then(() => {
        let inputs = Array.from($("#product-form input"))
        for(let index in inputs) {
            inputs[index].value = ""
        }
        // location.href = "/"
    }).catch((err) => {
        console.log(JSON.stringify(err.responseText))
    })
}

function cancel()
{
    $("#product-cancel-btn")
    {
        location.href = "/"
    }
}

function typeSwitcher()
{
    let productsInput = Array.from($(".products input"))
    for (let index in productsInput) productsInput[index].value = ""

    let dvd = $(".dvd-container")
    let furniture = $(".furniture-container")
    let book = $(".book-container")

    let typeValue = $("#productType").val()

    if (typeValue === "dvd") dvd.show()
    else dvd.hide()

    if (typeValue === "furniture") furniture.show()
    else furniture.hide()

    if (typeValue === "book") book.show()
    else book.hide()
}

function deleteProduct()
{
    let ids = []
    let checkboxes = $(".delete-checkbox")

    for(let i=0, n=checkboxes.length;i<n;i++) {
        if (checkboxes[i].checked) {
            ids.push(checkboxes[i].value)
        }
    }
    if (ids.length > 0) {
        $.ajax({
            type: "POST",
            url: "massdelete",
            data: {
                ids: ids
            },
        }).then((resp) => {
            console.log("massdelete then", resp)
            location.reload()
        }).catch((err) => {
            console.log("massdelete catch", err)
        })
    }
}
