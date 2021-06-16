function Protection(test) {
    if (test.work.value.replace(/\s/g,"") == "") {
        alert("Заполниете поле 'Проекта'");
        return false;
    }

    var chetchik = 0;

    if (document.getElementById("SunnyDay1").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay2").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay3").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay4").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay5").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay6").value.length == 0){
        chetchik += 1;
    }

    if (document.getElementById("SunnyDay7").value.length == 0){
        chetchik += 1;
    }

    if (chetchik > 0) {
        alert("Вы точно хотите пропустить столько дней " + chetchik );
    }
}

function sotrudnicProtect(test) {
    if (test.name.value.replace(/\s/g,"") == "") {
        alert("Введите имя сотрудника");
        return false;
    }
}