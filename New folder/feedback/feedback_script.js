function sendFeedback()
{
    var mydialog= document.getElementById('window');
    var feedback= document.getElementById('feedback').value;
/*database*/

    mydialog.close();
    OFF();

}


function openFeedback()
{
   var mydialog= document.getElementById('window');
   mydialog.showModal();
   ON();

}

function closeFeedback()
{
    var mydialog= document.getElementById('window');
    mydialog.close();

}
function ON()
{
    document.getElementById("mask").style.display ="block";
}

function OFF()
{
    document.getElementById("mask").style.display = "none";
}