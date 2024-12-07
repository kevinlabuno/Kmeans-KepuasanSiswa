@extends('layouts.app')

@section('content')
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
        @endif
        
        <h5 class="card-title">Hasil Inputan Siswa Terbaru</h5>
        
        <ol class="list-group list-group">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nama</div>
                    {{ $data->nama }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Kelas</div>
                    {{ $data->kelas }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Jenis Kelamin</div>
                    {{ $data->jenis }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nama Guru</div>
                    {{ $data->guru }}
                </div>
                <span class="badge bg-primary rounded-pill"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan penjelasan rencana kegiatan belajar mengajar yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c1 }}
                </div>
                <span class="badge bg-primary rounded-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan kesiapan dan penguasaan materi yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c2 }}
                </div>
                <span class="badge bg-primary rounded-pill">2</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian kesempatan tanya jawab yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c3 }}
                </div>
                <span class="badge bg-primary rounded-pill">3</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian soal ujian yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c4 }}
                </div>
                <span class="badge bg-primary rounded-pill">4</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan pemberian kuis dan tugas sebagai evaluasi pembelajaran yang diberikan Guru SMAN 1 Dimembe?</div>
                    {{ $data->c5 }}
                </div>
                <span class="badge bg-primary rounded-pill">5</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan penggunaan media pembelajaran atau alat bantu pembelajaran materi?</div>
                    {{ $data->c6 }}
                </div>
                <span class="badge bg-primary rounded-pill">6</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan keterbukaan dan kejelasan guru mengenai pemeriksaan tugas dan hasil ujian?</div>
                    {{ $data->c7 }}
                </div>
                <span class="badge bg-primary rounded-pill">7</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan variasi metode pembelajaran yang dilakukan guru?</div>
                    {{ $data->c8 }}
                </div>
                <span class="badge bg-primary rounded-pill">8</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan kehadiran guru pada jam pelajaran yang ditentukan?</div>
                    {{ $data->c9 }}
                </div>
                <span class="badge bg-primary rounded-pill">9</span>
            </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Apakah anda puas dengan keterkaitan materi pembelajaran dan penerapan materi pembelajaran di tengah masyarakat?</div>
                    {{ $data->c10 }}
                </div>
                <span class="badge bg-primary rounded-pill">10</span>
            </li>

        </ol>
        
    </div>
@endsection
