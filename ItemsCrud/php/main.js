let id = $("input[name*='item_id']")
//id.attr("readonly","readonly");


$(".btnedit").click(e => {
    let textvalues = displayData(e);

    ;
    let itemname = $("input[name*='item_name']");
    let itemdescription = $("input[name*='item_description']");
    let itemprice = $("input[name*='item_price']");
    let itemamount = $("input[name*='item_amount']");

    id.val(textvalues[0]);
    itemname.val(textvalues[1]);
    itemdescription.val(textvalues[2]);
    itemprice.val(textvalues[3].replace("$", ""));
    itemamount.val(textvalues[4]);
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