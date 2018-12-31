function pilih(){
    var mapel = document.getElementById("mapel");
    var pilihan = document.getElementById("pilihan");
    var option = document.createElement("option");

    option.text = mapel.options[mapel.selectedIndex].text;
    try{
        pilihan.add(option,null);
    }
    catch(ex){
        pilihan.add(option);
    }
}