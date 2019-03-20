function sendFeedback()
{

    var a= document.getElementById("feedback").value;
    document.getElementById("send").value=a;





    /*var a= document.getElementById("feedback").value;
    document.getElementById("send").value=a;
    */
  //  var mydialog= document.getElementById('window');
    //var feedback= document.getElementById('feedback').value;
    /*database*/

    //mydialog.close();
    //var cont= document.getElementById('c');
   // cont.style.display="none";
}
function openFeedback()
{
    var mydialog= document.getElementById('window');
    mydialog.showModal();
    var cont= document.getElementById('c');
    cont.style.display="inline";
}
function closeFeedback()
{
    var mydialog= document.getElementById('window');
    mydialog.close();
    var cont= document.getElementById('c');
    cont.style.display="none";

}
function hide()
{
    var mydialog= document.getElementById('window');
    mydialog.close();

}