// filename tugas1
// author andre feri s

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