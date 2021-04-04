var dialog;

function OpenDialog(type, productId) {
    if (type == "Auction" || type == "Best Offer") {
        dialog = document.getElementById('dialog_' + productId);
        dialog.showModal();
    } else {
        dialog = document.getElementById('dialogConfirm_' + productId);
        dialog.showModal();
    }
}

function CloseDialog() {

    dialog.close();

}

function AdminPrompt()
{
    dialog = document.getElementById('userlist');
        dialog.showModal();
}