var itemid = $("input[name*='item_id']")
//id.attr("readonly","readonly");


$(".btnedit").click(e => {
    let textvalues = displayData(e);

    ;
    let itemname = $("input[name*='item_name']");
    let itemdescription = $("input[name*='item_description']");
    let itemsku = $("input[name*='item_sku']");
    let itemurl = $("input[name*='pictureUrl']");
    let itemprice = $("input[name*='item_price']");
    let itemamount = $("input[name*='item_amount']");
    let itemStatus = $("input[name*='item_status']");

    itemid.val(textvalues[0]);
    itemname.val(textvalues[1]);
    itemdescription.val(textvalues[3]);
    itemsku.val(textvalues[4]);
    itemurl.val(textvalues[7]);
    itemprice.val(textvalues[5].replace("฿", ""));
    itemamount.val(textvalues[6]);
    itemStatus.val(textvalues[8]);
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}