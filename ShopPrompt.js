
var dialog;
function OpenDialog(){

    var type = document.getElementById("TypeOfSell").value;
    alert(type);

    if(type == "Auction" || type == "Best Offer")
    {
        dialog = document.getElementById('dialog');
    dialog.showModal();
    }
    else{
        dialog = document.getElementById('dialogConfirm');
    dialog.showModal();
    }
}
function CloseDialog(){
       
    dialog.close();

}