function ShowDialog()
{
	var dialog = document.getElementById('dialog');
    var openbutton = document.getElementById('Open');
    var closebutton = document.getElementById('Close');

    openbutton.addEventListener('click', function(){
        dialog.showModal();
    });

    closebutton.addEventListener('click', function(){
        dialog.close();
    });

}

function OpenDialog(){
    var dialog = document.getElementById('dialog');
    dialog.showModal();

}