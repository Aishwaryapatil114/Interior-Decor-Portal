function valid1()
{
    var x;
    x=event.keyCode;
    if(x>=48 && x<=57)
    event.keycode=x;
    else
    event.keycode=0;
}

function valid2()
{
    var x;
    x=event.keyCode;
    if(x>=65 && x<=90 || (x>=97 && x<=122))
    event.keycode=x;
    else
    event.keycode=0;
}