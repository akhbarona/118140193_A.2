var data=[
	"Buku Tulis",
	"Pensil",
	"Spidol"
];

function tampil() {
	var barang = document.getElementById('list');
	barang.innerHTML = "";

	for (var i = 0; i < data.length; i++) {
		var btnEdit = "<a href='#' onclick='edit("+i+")'>Edit</a>";
        var btnHapus = "<a href='#' onclick='hapus("+i+")'>Hapus</a>";

        barang.innerHTML +=  "<li>" + data[i] + " ["+btnEdit + " | "+ btnHapus +"]</li>";
	}
}

function tambah(){
    var input = document.querySelector("input[name=barang]");
    data.push(input.value);
    tampil();
}

function edit(id){
    var newBarang = prompt("Nama baru", data[id]);
    data[id] = newBarang;
    tampil();
}

function hapus(id){
    data.splice(id, 1);
    tampil();
}

tampil();