var dialog;

function OpenDialog(type) {
    if (type == "Auction" || type == "Best Offer") {
        dialog = document.getElementById('dialog');
        dialog.showModal();
    } else {
        dialog = document.getElementById('dialogConfirm');
        dialog.showModal();
    }
}

function CloseDialog() {

    dialog.close();

}