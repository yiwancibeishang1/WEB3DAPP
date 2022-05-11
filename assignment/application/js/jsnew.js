var counter = 0;

function swap(selected)
{
    document.getElementById('home').style.display = 'none';
    document.getElementById('coke').style.display = 'none';
    document.getElementById('sprite').style.display = 'none';
    document.getElementById('pepper').style.display = 'none';

    document.getElementById(selected).style.display = 'block';

}

function changeLook()
{
    document.getElementById('theme').style.backgroundColor = 'red';
    document.getElementById('theme').style.fontFamily='sans-serif';
    document.getElementById('theme').style.color = 'black';
}

function countUp()
{
    counter+= 1;
    document.getElementById('result').innerHTML = counter;
}

function changeColor(newColor) 
{
    var elem = document.getElementById("paral");
    elem.style.color = newColor;
}