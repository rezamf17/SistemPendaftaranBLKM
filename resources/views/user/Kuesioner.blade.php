@extends('layouts.temp')
@section('title')
Survey Kepuasan Masyarakat
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Survey Kepuasan Masyarakat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Survey Kepuasan Masyarakat</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
  <div class="card">
    <div class="card-header">Survey Kepuasan Masyarakat</div>
        <div class="card-body">
    <form action="{{ url('Kuesioner') }}" method="post" accept-charset="utf-8">
    @csrf
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>1. Program pelatihan yang dilaksanakan oleh Balai Latihan Kerja Mandiri (BLKM) menurut saudata telah sesuai dengan kurikulum?</label> <br>
            <input type="radio" name="soal_1" value="a">
            A. Sangat Sesuai <br>
            <input type="radio" name="soal_1" value="b">
            B. Sesuai <br>
            <input type="radio" name="soal_1" value="c">
            C. Tidak Sesuai
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>2. Menurut saudara program pelatihan yang dilaksanakan oleh Balai Latihan Kerja Mandiri (BLKM) dapat memberikan manfaat bagi peserta lain?</label> <br>
            <input type="radio" name="soal_2" value="a">
            A. Sangat Bermanfaat <br>
            <input type="radio" name="soal_2" value="b">
            B. Bermanfaat <br>
            <input type="radio" name="soal_2" value="c">
            C. Tidak Bermanfaat
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>3. Menurut Saudara apakah instruktur/Pengajar telah sesuai dengan kebutuhan?</label> <br>
            <input type="radio" name="soal_3" value="a">
            A. Sangat Sesuai <br>
            <input type="radio" name="soal_3" value="c">
            B. Sesuai <br>
            <input type="radio" name="soal_3" value="c">
            C. Tidak Sesuai
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>4. Menurut Saudara Penyampaian Materi oleh instruktur/Pengajar dengan jelas
            dan dapat dimengerti oleh Peserta Pelatihan?</label> <br>
            <input type="radio" name="soal_4" value="a">
            A. Sangat Jelas <br>
            <input type="radio" name="soal_4" value="b">
            B. Jelas <br>
            <input type="radio" name="soal_4" value="c">
            C. Tidak Jelas
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>5. Bagaimana Menurut Saudara keterampilan Instruktur/Pengajar saat
            melakukan praktek?</label> <br>
            <input type="radio" name="soal_5" value="a">
            A. Sangat Memuaskan <br>
            <input type="radio" name="soal_5" value="b">
            B. Memuaskan <br>
            <input type="radio" name="soal_5" value="c">
            C. Tidak Memuaskan
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>6. Menurut Saudara apakah Penyelenggara/Panitia dapat membantu peserta
            dalam memberikan layanan dan bimbingan pada saat praktek?</label> <br>
            <input type="radio" name="soal_6" value="a" >
            A. Sangat Sesuai <br>
            <input type="radio" name="soal_6" value="b" >
            B. Sesuai <br>
            <input type="radio" name="soal_6" value="c" >
            C. Tidak Sesuai
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>7. Menurut Saudara bagaimana tanggung jawab penyelenggara/panitia
            terhadap kenyamanan peserta saat berada ditempat Pelatihan?</label> <br>
            <input type="radio" name="soal_7" value="a" >
            A. Sangat Memuaskan <br>
            <input type="radio" name="soal_7" value="b" >
            B. Memuaskan <br>
            <input type="radio" name="soal_7" value="c" >
            C. Tidak Memuaskan
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>8. Bagaimana menurut Saudara sarana dan prasarana yang diberikan oleh
            BLKM selama Pelatihan sesuai dengan kebutuhan?</label> <br>
            <input type="radio" name="soal_8" value="a">
            A. Sangat Sesuai <br>
            <input type="radio" name="soal_8" value="b">
            B. Sesuai <br>
            <input type="radio" name="soal_8" value="c">
            C. Tidak Sesuai
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>9. Sudah Sesuaikah Pelatihan yang saudara ikuti sekarang dengan arah minat dan bidang usaha yang sedang ditekuni?</label> <br>
            <input type="radio" name="soal_9" value="a">
            A. Sangat Sesuai <br>
            <input type="radio" name="soal_9" value="b">
            B. Sesuai <br>
            <input type="radio" name="soal_9" value="c">
            C. Tidak Sesuai
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>10. Apakah menurut saudara Pelatihan yang telah dilaksanakan selama berhari-hari sudah cukup?</label> <br>
            <input type="radio" name="soal_10" value="a">
            A. Sangat Cukup <br>
            <input type="radio" name="soal_10" value="b">
            B. Cukup <br>
            <input type="radio" name="soal_10" value="c">
            C. Tidak Cukup
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-radio">
            <label>11. Apakah tujuan Saudara mengikuti Pelatihan yang dilaksanakan oleh BLKM
            (Balai Latihan Kerja Mandiri)?</label> <br>
            <input type="radio" name="soal_11" value="a">
            A. Meningkatkan Pengetahuan dan Keterampilan <br>
            <input type="radio" name="soal_11" value="b">
            B. Meningkatkan Penghasilan <br>
            <input type="radio" name="soal_11" value="c">
            C. Ikut-ikutan teman karena tidak ada kegiatan
            </div>
        </div>
        <div class="form-group">
            <label>Bagaimana KESAN SAUDARA TERHADAP PELATIHAN yang di laksanakan
            oleh BLKM?</label>
            <textarea name="soal_12" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Apakah saran saudara untuk perbaikan pelatihan yang dilaksanakan oleh
             BLKM kedepannya?</label>
            <textarea name="soal_13" class="form-control"></textarea>
        </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
      @endsection
