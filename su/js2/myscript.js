function show() {

    document.getElementById('photo').addEventListener('change', readURL, true);
}

    function readURL(){
        var file = document.getElementById("photo").files[0];
        var reader = new FileReader();
        reader.onloadend = function(){
            document.getElementById('pp').style.src = "url(" + reader.result + ")";
        }
        if(file){
            reader.readAsDataURL(file);
        }else{
        }
    }


