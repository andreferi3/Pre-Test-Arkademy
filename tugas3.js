function pohon(x, y)
{
    var pohon = y;

    for(var i = 0; i < x; i++)
    {
        pohon = (pohon*2) + 1;
    }

    return pohon;
}

console.log(pohon(1, 2));