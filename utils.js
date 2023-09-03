function findCookie(name)
{
    var cookies = document.cookie.split("; ");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].split("=");
        if (cookie[0] === name) {
            return cookie[1];
        }
    }
    return null;
}

function setCookie(name, value)
{
    document.cookie = name + "=" + value;
}
