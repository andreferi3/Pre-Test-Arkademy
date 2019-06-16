// filename tugas3
// author andreferi

/*
    PERTANYAAN :

    Kategori: Intermediate

    Pohon Imajinatif
    Diketahui sebuah pohon imajinatif yang tumbuh di sebuah taman. Pohon tersebut hanya tumbuh sepanjang 1 m saat musim gugur dan 2 kali lipat tinggi pohon tersebut saat musim semi. Buatlah program yang menentukan tinggi pohon tersebut setelah Y tahun dengan tinggi awal X m.

    REQUIREMENT:
    1. Input user berupa nilai X dan Y dengan ketentuan :
            a. X > 0
            b. Y > 0
    2. Output berupa tinggi akhir pohon tersebut dengan ketentuan:
            a. Pada 1 tahun, musim semi datang terlebih dahulu dibandingkan musim gugur.
*/

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