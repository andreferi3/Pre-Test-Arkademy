// filename tugas1
// author andre feri s

/*

PERTANYAAN :
Kategori: Beginner

Simple Math
Seorang anak dimintai tolong oleh ibunya untuk membeli mie instan di minimarket. Anak tersebut dibekali oleh ibunya uang sebanyak Rp 50.000,00. Di minimarket, mie instan dijual dengan harga Rp 2.500,00. Berapakah mie instan yang didapatkan oleh anak tersebut jika minimarket tersebut sedang mengadakan promosi “setiap pembelian 4 mie instan, akan mendapatkan bonus 1 mie instan”?

OUTPUT : menampilkan di layar/console banyaknya mie instan yang didapat oleh anak tersebut

*/

// data harga mie instan
var mie = 2500;

function kembalian(duit)
{
    // Menghitung uang kembalian
    var kembali = duit / mie;

    // Mendapatkan bonus mie setiap 4 pembelian
    var bonus = kembali / 4;

    bonus = Math.floor(bonus);

    return kembali + bonus;
}

console.log(kembalian(12500));