var dialog;

function OpenDialog(type, productId) {//will open specific dialog dependig of the type of the transaction
    if (type == "Auction" || type == "Best Offer") {
        dialog = document.getElementById('dialog_' + productId);
        dialog.showModal();
    } else {
        dialog = document.getElementById('dialogConfirm_' + productId);
        dialog.showModal();
    }
}

function CloseDialog() {//close selected dialog

    dialog.close();

}

function AdminPrompt()//manage the user list dialog
{
    dialog = document.getElementById('userlist');
        dialog.showModal();
}