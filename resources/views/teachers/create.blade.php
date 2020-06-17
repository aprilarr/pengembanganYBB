@extends('layout/footer')

@section('container')    

<section class="probootstrap-section">
<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Form Tambah Data Tenaga Kependidikan</h3>
                <form method="POST" action="/teachers">
                @csrf
                <div class="form-group">
                    <label for="nuptk">NUPTK</label>
                    <input type="text" class="form-control" id="nuptk" placeholder="Masukan NUPTK" name="nuptk">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" id="ttl" aria-describedby="ttlhelp" placeholder="Masukan Tempat dan Tgl Lahir (DD-MM-YYYY)" name="ttl">
                    <small id="ttlphelp" class="form-text text-muted">Contoh: (Bandung, 30-04-1997)</small>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Lengkap" name="alamat">
                </div>
                <div class="form-group">
                    <label for="tlp">No. Telepon</label>
                    <input type="text" class="form-control" id="tlp" placeholder="Masukan No Telp" name="tlp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailhelp" placeholder="Masukan Email" name="email">
                    <small id="emailhelp" class="form-text text-muted">contoh: xxxx@mail.com</small>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" placeholder="Masukan Jabatan di Sekolah" name="jabatan">
                </div>
                <div class="form-group">
                    <label for="pendidikan">Pendidikan Terakhir</label>
                    <input type="text" class="form-control" id="pendidikan" aria-describedby="pendidikanhelp" placeholder="Masukan Pendidikan Terakhir" name="pendidikan">
                    <small id="pedididikanhelp" class="form-text text-muted">Contoh: S1-Universitas Pendidikan Indonesia-Teknik Komputer-2006</small>
                </div>
                <div class="custom-file">
                    <label for="gambar">Foto</label>
                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    <label class="custom-file-label" for="customFile">Masukan Gambar</label>
                </div>
                <div class="form-group">
                    <label for="fb">Alamat Facebook</label>
                    <input type="text" class="form-control" id="fb" aria-describedby="fbhelp" placeholder="Masukan Alamat FB" name="fb">
                    <small id="fbhelp" class="form-text text-muted">Contoh: https://www.facebook.com/pages/SMP-YBB-Yayasan-Budi-Bakti-Bandung</small>
                </div>
                <div class="form-group">
                    <label for="ig">Alamat Intagram</label>
                    <input type="text" class="form-control" id="ig" aria-describedby="ighelp" placeholder="Masukan Alamat IG" name="ig">
                    <small id="ighelp" class="form-text text-muted">Contoh: https://www.instagram.com/budibakti80/?hl=en</small>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/teachers" class="btn btn-success my-3">Kembali</a>
                </form>
            
        </div>
    </div>
</div>
</section>

@endsection
@extends('layout/header')
<script src="/enlight/js/scripts.min.js"></script>
<script src="/enlight/js/main.min.js"></script>
<script src="/enlightjs/custom.js"></script>