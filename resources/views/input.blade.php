@extends('layouts.app')

@section('content')
<div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Pengisian Siswa</h5>

              <form  action="{{route('input.post')}}" method="POST">
                @csrf
    
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="kelas" id="kelas">
                            @foreach($data as $kelas)
                                <option value="{{ $kelas->nama_kelas }}">{{ $kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="jenis" aria-label="Default select example">
                      <option value="Laki-laki">Laki-Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="guru" name="guru" style="width: 200px;">
                      <option >Pilih Guru</option>
                      @foreach ($gurus as $guru)
                        <option value="{{ $guru }}">{{ $guru }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                

                <hr>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan penjelasan rencana kegiatan belajar mengajar yang diberikan Guru SMAN 1 Dimembe?</label>
                    <select class="form-select" aria-label="Default select example" name="p1">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan kesiapan dan penguasaan materi yang diberikan Guru SMAN 1 Dimembe?</label>
                    <select class="form-select" aria-label="Default select example" name="p2">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan pemberian kesempatan tanya jawab yang diberikan Guru SMAN 1 Dimembe?</label>
                    <select class="form-select" aria-label="Default select example" name="p3">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan pemberian soal ujian yang diberikan Guru SMAN 1 Dimembe? (Soal Ujian yang diberikan sesuai dengan materi yang telah diberikan)</label>
                    <select class="form-select" aria-label="Default select example" name="p4">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan pemberian kuis dan tugas sebagai evaluasi pembelajaran yang diberikan Guru SMAN 1 Dimembe?</label>
                    <select class="form-select" aria-label="Default select example" name="p5">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan penggunaan media pembelajaran atau alat bantu pembelajaran materi? (Media pembelajaran/alat bantu seperti materi dalam bentuk powerpoint, video, buku cetak)</label>
                    <select class="form-select" aria-label="Default select example" name="p6">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label"> Apakah anda puas dengan keterbukaan dan kejelasan guru mengenai pemeriksaan tugas dan hasil ujian?</label>
                    <select class="form-select" aria-label="Default select example" name="p7">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan variasi metode pembelajaran yang dilakukan guru? (Variasi metode pembelajaran: Banyak atau kurangnya interaksi antar guru dan siswa, pembelajaran materi tidak dijelaskan dan siswa langsung diminta untuk melakukan latihan soal)</label>
                    <select class="form-select" aria-label="Default select example" name="p8">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan kehadiran guru pada jam pelajaran yang ditentukan?</label>
                    <select class="form-select" aria-label="Default select example" name="p9">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apakah anda puas dengan keterkaitan materi pembelajaran dan penerapan materi pembelajaran di tengah masyarakat?</label>
                    <select class="form-select" aria-label="Default select example" name="p10">
                        <option value="Tidak Puas">Tidak Puas</option>
                        <option value="Cukup Puas">Cukup Puas</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                    </select>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>

              </form>

            </div>
          </div>

        </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#guru').select2({
                placeholder: 'Pilih Guru',
                allowClear: true
            });
        });
    </script>

    
@endsection