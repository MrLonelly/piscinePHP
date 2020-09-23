let data = [];

function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}

function init()
{
    alert('ok');

    let x = getCookie('todo_list');

    console.log(x);
}

document.onload = init;

function addNew()
{
    let todo = prompt('Enter todo.');

    data.push(todo);
    let json_data = JSON.stringify(data);

    var element = document.createElement('div');
    element.appendChild(document.createTextNode(todo));
    element.classList.add('card');

    document.getElementById('ft_list').appendChild(element);
    
    createCookie('todo_list', json_data, 1);

    let x = document.cookie;
    console.log(x);
}