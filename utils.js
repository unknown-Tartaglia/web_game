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
    var date = new Date();
    // 将过期时间设置为 30天 后
    date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000)); // 30天的毫秒数

    var expires = "; expires=" + date.toUTCString();
    document.cookie = name + "=" + value + expires + "; path=/";
}
