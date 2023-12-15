function levelChange () {
    var option = document.getElementById("levelOption");
    var selVar = option.value;
    var classUrl = window.location.href+'/controller/getClass.php?level='+selVar;
    var classOption = document.getElementById("classOption-replace");
    var defaultOption = "<select class=\"form-control select\">";
        defaultOption += "<option default=\"default\" value=\"0\">Select Class</option>";
        defaultOption += "</select><span class=\"help-block\">Select box example</span>";
    
    if (selVar != 0) {
        $.ajax({type: "get", url: classUrl, success: function (result){
            classOption.disabled = false;
            classOption.style.display = "block";
            
            let out = "";
            out += result;
            classOption.innerHTML= out;
        }})
    }

    if (selVar == 0) {
        classOption.disabled = true;
        classOption.innerHTML = defaultOption;
        classOption.selectedIndex = 0;
    }
}