@extends('layouts.appbackup')

@section('content')
    <!-- Icon -->
    <div class="fadeIn first">
        <img src="../img/doctor.png" alt="User Icon" />
      <h1>
          {{ Auth::user()->name }}
      </h1>
    </div>

<form action="{{ route('survey.store') }}" method="POST"> 
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="id" value="{{Auth::user()->id}}"> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table" id="datatables">
                <thead>
                    <tr>
                        <th>
                            Kegiatan
                        </th>
                        <th>
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="success">
                        <td>
                            Saya Pergi Keluar Rumah
                        </td>
                        <td>
                            <input type="radio" id="q1" name="y1" value="1"> <label for="y1">YA</label>
                            <input type="radio" id="q1" name="y1" value="0"> <label for="n1">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Menggunakan Transportasi Umum : Online, Angkot, Bus, Taksi, Kerata Api
                        </td>
                        <td>
                            <input type="radio" id="q2" name="y2" value="1"> <label for="y2">YA</label>
                            <input type="radio" id="q2" name="y2" value="0"> <label for="n2">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Memakai Masket Pada Saat Berkumpul Dengan Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q3" name="y3" value="1"> <label for="y3">YA</label>
                            <input type="radio" id="q3" name="y3" value="0"> <label for="n3">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Berjabat Dengan Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q4" name="y4" value="1"> <label for="y4">YA</label>
                            <input type="radio" id="q4" name="y4" value="0"> <label for="n4">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Membersihkan Tangan Denga Sanitaizer / Tissue Basah Sebelum Pegang Kemudi Mobil/Motor
                        </td>
                        <td>
                            <input type="radio" id="q5" name="y5" value="1"> <label for="y5">YA</label>
                            <input type="radio" id="q5" name="y5" value="0"> <label for="n5">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Menyentuh Benda / Uang Yang Juga Disentuh Orang Lain
                        </td>
                        <td>
                            <input type="radio" id="q6" name="y6" value="1"> <label for="y6">YA</label>
                            <input type="radio" id="q6" name="y6" value="0"> <label for="n6">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Menjaga Jarak 1,5 Meter Dengan Orang Lain Ketika : Belanja, Bekerja, Belajar, Ibadah
                        </td>
                        <td>
                            <input type="radio" id="q7" name="y7" value="1"> <label for="y7">YA</label>
                            <input type="radio" id="q7" name="y7" value="0"> <label for="n7">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Makan Diluar Rumah ( Warung / Restauran )
                        </td>
                        <td>
                            <input type="radio" id="q8" name="y8" value="1"> <label for="y8">YA</label>
                            <input type="radio" id="q8" name="y8" value="0"> <label for="n8">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Minum Air Hangat & Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Tujuam.
                        </td>
                        <td>
                            <input type="radio" id="q9" name="y9" value="1"> <label for="y9">YA</label>
                            <input type="radio" id="q9" name="y9" value="0"> <label for="n9">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Berada Di Wilayah Kelurahan Tempat Pasien Tertular 
                        </td>
                        <td>
                            <input type="radio" id="q10" name="y10" value="1"><label for="y10">YA</label>
                            <input type="radio" id="q10" name="y10" value="0"><label for="n10">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Pasang Hand Sanitizer Di Depan Pintu Masuk, Untuk Bersihkan Tangan Sebelum Memegang Gagang (Handle) Pintu Masuk Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q11" name="y11" value="1"><label for="y11">YA</label>
                            <input type="radio" id="q11" name="y11" value="0"><label for="n11">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Mencuci Tangan Dengan Sabun Setelah Tiba Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q12" name="y12" value="1"><label for="y12">YA</label>                          
                            <input type="radio" id="q12" name="y12" value="0"><label for="n12">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Menyediakan : Tissue Basah / Antiseptic, Masker, Sabun Antiseptic Bagi Keluarga Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q13" name="y13" value="1"><label for="y13">YA</label> 
                            <input type="radio" id="q13" name="y13" value="0"><label for="n13">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Segera Merendam Baju & Celana Bekas Pakai Di Luar Rumah Ke dalam Air Panas / Sabun
                        </td>
                        <td>
                            <input type="radio" id="q14" name="y14" value="1"><label for="y14">YA</label>
                            <input type="radio" id="q14" name="y14" value="0"><label for="n14">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Segera Mandi Keramas Setelah Saya Tiba Di Rumah 
                        </td>
                        <td>
                            <input type="radio" id="q15" name="y15" value="1"><label for="y15">YA</label>
                            <input type="radio" id="q15" name="y15" value="0"><label for="n15">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Mensosialisasikan Check List Penilaian Resiko Pribadi ini Kepada Keluarga Di Rumah
                        </td>
                        <td>
                            <input type="radio" id="q16" name="y16" value="1"><label for="y16">YA</label>
                            <input type="radio" id="q16" name="y16" value="0"><label for="n16">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Dalam Sehari Tidak Terkena Cahaya Matahari Minimal 15 menit
                        </td>
                        <td>
                            <input type="radio" id="q17" name="y17" value="1"><label for="y17">YA</label>
                            <input type="radio" id="q17" name="y17" value="0"><label for="n17">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Tidak Jalan Kaki / Berolahraga Minimal 30 menit Setiap Hari 
                        </td>
                        <td>
                            <input type="radio" id="q18" name="y18" value="1"><label for="y18">YA</label>
                            <input type="radio" id="q18" name="y18" value="0"><label for="n18">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Jarang Minum Vitamin C & E, dan Kurang Tidur 
                        </td>
                        <td>
                            <input type="radio" id="q19" name="y19" value="1"><label for="y19">YA</label>
                            <input type="radio" id="q19" name="y19" value="0"><label for="n19">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Usia Saya Diatas 60 Tahun 
                        </td>
                        <td>
                            <input type="radio" id="q20" name="y20" value="1"><label for="y20">YA</label>
                            <input type="radio" id="q20" name="y20" value="0"><label for="n20">TIDAK</label>
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            Saya Mempunyai Penyakit : Jantung / Diabetes / Gangguan Pernafasan Kronik   
                        </td>
                        <td>
                            <input type="radio" id="q21" name="y21" value="1"><label for="y21">YA</label>
                            <input type="radio" id="q21" name="y21" value="0"><label for="n21">TIDAK</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<input type="submit" value="Check">
</form>
@endsection

