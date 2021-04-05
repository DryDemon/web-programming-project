var dialog;

function OpenDialog(type, productId) { //will open specific dialog dependig of the type of the transaction
    if (type == "Auction" || type == "Best Offer") {
        dialog = document.getElementById('dialog_' + productId);
        dialog.showModal();
    } else {
        dialog = document.getElementById('dialogConfirm_' + productId);
        dialog.showModal();
    }
}

function CloseDialog() { //close selected dialog

    dialog.close();

}

function AdminPrompt() //manage the user list dialog
{
    dialog = document.getElementById("list");

    document.getElementById("user").hidden = false;
    dialog.showModal();


}

function NegociationPrompt() //manage the negotiation list
{
    // alert(1);
    dialog = document.getElementById("list");
    // alert(dialog)
    // console.log(dialog)
    dialog.showModal();
}

function reloadFilter() {
    var cats = document.getElementById("cats").value.split(",");

    for (var cat of cats) {
        var checked = document.getElementById(cat).checked;
        var x = document.getElementsByClassName(cat);
        var i;
        for (i = 0; i < x.length; i++) {
            if (checked) {
                x[i].style.display = "block";
            } else {
                x[i].style.display = "none";

            }
        }

    }
}