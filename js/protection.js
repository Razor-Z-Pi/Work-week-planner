function Protection(test) {
    if (test.work.value.replace(/\s/g,"") == "") {
        alert("Заполниете поле 'Проекта'");
        return false;
    }

    if (document.getElementById("SunnyDay1").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay2").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay3").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay4").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay5").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay6").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }

    if (document.getElementById("SunnyDay7").value.length == 0){
        alert("Выберите сотрудника")
        return false;
    }
}

function sotrudnicProtect(test) {
    if (test.name.value.replace(/\s/g,"") == "") {
        alert("Введите имя сотрудника");
        return false;
    }
}