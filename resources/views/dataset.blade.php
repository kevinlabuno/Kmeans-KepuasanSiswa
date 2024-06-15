@extends('layouts.app')
    @section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            @if (session('success'))
                <div class="alert alert-primary">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


{{-- ----------DATASET SISWA------------- --}}
         <div class="card">
              <div class="card-body">
              <h3 class="card-title text-center">Dataset Siswa</h3>
              <table id="dataset" class="table">
                <thead>
                  <tr class="table-warning">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                @php
                    {{$no= 1;}}
                @endphp
                <tbody>
                                        @foreach ($data as $item)
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kelas}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->c1}}</td>
                    <td>{{$item->c2}}</td>
                    <td>{{$item->c3}}</td>
                    <td>{{$item->c4}}</td>
                    <td>{{$item->c5}}</td>
                    <td>{{$item->c6}}</td>
                    <td>{{$item->c7}}</td>
                    <td>{{$item->c8}}</td>
                    <td>{{$item->c9}}</td>
                    <td>{{$item->c10}}</td><b>
                    <td><b>{{$item->total}}</b></td>
                  </tr>
                                      @endforeach
                </tbody>
              </table>
            </div>
          </div>

{{-- ------------------------------------------------------- --}}


<div class="container-fluid">
    <h2 class="text-center">Perhitungan <em>K-Means</em></h2>
    <h3></h3>
    <hr>

<button type="button" class="btn btn-primary" onclick="showSection('section1')">Data Awal</button>
<button type="button" class="btn btn-primary" onclick="showSection('section2')">Iterasi I</button>
<button type="button" class="btn btn-primary" onclick="showSection('section6')">Iterasi II</button>


{{-- --------------PREVIEW DATA S1----------------------- --}}
<section class="service_section layout_padding" id="section1">
                @if (session('success'))
            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
            @endif
  <h3 style="line-height: 50px;">Keterangan</h3>
  <h4>Banyak Data: {{$jumlah}} Data</h4>
  </table>
 
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatables" class="table text-dark align-middle">
                        <thead class="text-dark">
                            <tr>
                                <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
                    <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                             @foreach ($data as $item)
                  <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kelas}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->c1}}</td>
                    <td>{{$item->c2}}</td>
                    <td>{{$item->c3}}</td>
                    <td>{{$item->c4}}</td>
                    <td>{{$item->c5}}</td>
                    <td>{{$item->c6}}</td>
                    <td>{{$item->c7}}</td>
                    <td>{{$item->c8}}</td>
                    <td>{{$item->c9}}</td>
                    <td>{{$item->c10}}</td><b>
                    <td><b>{{$item->total}}</b></td>
                  </tr>
                                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

{{-- ------------------------------------------------------------------------------- --}}

<section class="service_section layout_padding" id="section2">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section2')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section3')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section4')">Proses 3</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section5')">Proses 4</button>
    <hr>
        <div class="card">
            <h3 class="text-center">Iterasi I</h3>
            <h4 class="text-center">Proses 1 (Total Nilai Konversi dari Setiap Data)</h4>
            <h5>Total Terendah : {{$minTotal}}</h5>
            <h5>Total Tengah : {{$middleTotal}}</h5>
            <h5>Total Tertinggi : {{$maxTotal}}</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data2" class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark">
                            <tr>
                        <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
                    <th scope="col">Total</th>
                            </tr>
                        </thead>
                        @php
                            {{$no1= 1;}}
                        @endphp
                        <tbody class="text-dark">
                            @foreach ($data as $item)
                  <tr>
                    <th scope="row">{{$no1++}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kelas}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->c1}}</td>
                    <td>{{$item->c2}}</td>
                    <td>{{$item->c3}}</td>
                    <td>{{$item->c4}}</td>
                    <td>{{$item->c5}}</td>
                    <td>{{$item->c6}}</td>
                    <td>{{$item->c7}}</td>
                    <td>{{$item->c8}}</td>
                    <td>{{$item->c9}}</td>
                    <td>{{$item->c10}}</td><b>
                    <td><b>{{$item->total}}</b></td>
                  </tr>
                                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
</section>

{{-- ------------------------------------------------------------------------------- --}}

{{-- --------------------ITERASI I (PROSES 2) S3-------------------------- --}}
<section class="service_section layout_padding" id="section3">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section2')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section3')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section4')">Proses 3</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section5')">Proses 4</button>
    <hr>
        <div class="card">
            <h3 class="text-center">Iterasi I</h3>
            <h4 class="text-center">Proses 2 (Membuat <em>Centroid</em> Awal)</h4>
            <h5>Total Terendah : {{$minTotal}} (diambil)</h5>
            <h5>Total Tengah : {{$middleTotal}} (diambil)</h5>
            <h5>Total Tertinggi : {{$maxTotal}} (diambil)</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data2" class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark ">
        <tr>
            <th></th>
            <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        <tr>
            <td>C1</td>
            <td>{{$c1Data->c1}}</td>
            <td>{{$c1Data->c2}}</td>
            <td>{{$c1Data->c3}}</td>
            <td>{{$c1Data->c4}}</td>
            <td>{{$c1Data->c5}}</td>
            <td>{{$c1Data->c6}}</td>
            <td>{{$c1Data->c7}}</td>
            <td>{{$c1Data->c8}}</td>
            <td>{{$c1Data->c9}}</td>
            <td>{{$c1Data->c10}}</td>
            <td>{{$c1Data->total}}</td>
        </tr>
        <tr>
            <td>C2</td>
            <td>{{$c2Data->c1}}</td>
            <td>{{$c2Data->c2}}</td>
            <td>{{$c2Data->c3}}</td>
            <td>{{$c2Data->c4}}</td>
            <td>{{$c2Data->c5}}</td>
            <td>{{$c2Data->c6}}</td>
            <td>{{$c2Data->c7}}</td>
            <td>{{$c2Data->c8}}</td>
            <td>{{$c2Data->c9}}</td>
            <td>{{$c2Data->c10}}</td>
            <td>{{$c2Data->total}}</td>
        </tr>
        <tr>
            <td>C3</td>
            <td>{{$c3Data->c1}}</td>
            <td>{{$c3Data->c2}}</td>
            <td>{{$c3Data->c3}}</td>
            <td>{{$c3Data->c4}}</td>
            <td>{{$c3Data->c5}}</td>
            <td>{{$c3Data->c6}}</td>
            <td>{{$c3Data->c7}}</td>
            <td>{{$c3Data->c8}}</td>
            <td>{{$c3Data->c9}}</td>
            <td>{{$c3Data->c10}}</td>
            <td>{{$c3Data->total}}</td>
        </tr>
    </tbody>
                    </table>
                </div>
            </div>
        </div>
        
</section>

{{-- --------------------ITERASI I (PROSES 3) S4-------------------------- --}}
<section class="service_section layout_padding" id="section4">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section2')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section3')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section4')">Proses 3</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section5')">Proses 4</button>
    <hr>
        <div class="card">
            <h3 class="text-center">Iterasi I</h3>
            <h4 class="text-center">Proses 3 (Menghitung <em>Euclidean Distance</em>  ke <em>Centroid</em> Awal)</h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data3" class="table text-nowrap mb-0 align-middle">
                   <thead class="text-dark">
                <tr>
                    <th>No</th>
                    <th>Jarak ke C1</th>
                    <th>Jarak ke C2</th>
                    <th>Jarak ke C3</th>
                    <th>Cluster</th>
                </tr>
            </thead>
            <tbody class="text-dark">
                 @foreach ($jarak as $item)
                    <tr>
                        <td>{{ $item['data']->id }}</td>
                         <td>{{ number_format($item['jarakC1'], 2) }}</td>
                        <td>{{ number_format($item['jarakC2'], 2) }}</td>
                        <td>{{ number_format($item['jarakC3'], 2) }}</td>
                        <td>{{$item['clusterTerdekat']}}</td>
                    </tr>
                         @endforeach
            </tbody>
                    </table>
                </div>
            </div>
        </div>
        
</section>

{{-- --------------ITERASI I (PROSES 4) S5----------------------- --}}
<section class="service_section layout_padding" id="section5">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section2')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section3')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section4')">Proses 3</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section5')">Proses 4</button>
    <hr>
          <div class="card">
            <h3 class="text-center">Iterasi I</h3>
            <h4 class="text-center">Proses 4 (Hasil Perhitungan <em>Euclidean Distance</em> )</h4>
            <h5>C1: <b>Tidak Puas</b></h5>
            <h5>C2: <b>Cukup Puas</b></h5>
            <h5>C3: <b>Sangat Puas</b></h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="data4" class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark">
                            <tr>
                                <td>No</td>
                                <td>Cluster</td>
                                <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><b>{{$item->cluster}}</b></td>
                                <td>{{$item->c1}}</td>
                                <td>{{$item->c2}}</td>
                                <td>{{$item->c3}}</td>
                                <td>{{$item->c4}}</td>
                                <td>{{$item->c5}}</td>
                                <td>{{$item->c6}}</td>
                                <td>{{$item->c7}}</td>
                                <td>{{$item->c8}}</td>
                                <td>{{$item->c9}}</td>
                                <td>{{$item->c10}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

{{-- ---------------------------------------------------------------------------- --}}

{{-- ------------------ITERASI II---(PROSES 1)---S6---------------------------------- --}}
<section class="service_section layout_padding" id="section6">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section6')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section7')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section8')">Proses 3</button>

    <hr>
        <div class="card">
            <h3 class="text-center">Iterasi II</h3>
            <h4 class="text-center">Proses 1 (Membuat <em>Centroid</em>  Baru)</h4>
            <h5></h5>
            <h5></h5>
            <h5></h5>
            <div class="card-body">
                <div class="table-responsive">
                   <table id="data2" class="table text-nowrap mb-0 align-middle">
    <thead class="text-dark">
        <tr>
            <th></th>
            <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        <tr>
            <td>C1</td>
            <td>{{ number_format($centroid1->rata_c1, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c2, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c3, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c4, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c5, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c6, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c7, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c8, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c9, 2) }}</td>
            <td>{{ number_format($centroid1->rata_c10, 2) }}</td>

        </tr>
        <tr>
            <td>C2</td>
            <td>{{ number_format($centroid2->rata_c1, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c2, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c3, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c4, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c5, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c6, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c7, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c8, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c9, 2) }}</td>
            <td>{{ number_format($centroid2->rata_c10, 2) }}</td>
        </tr>
        <tr>
            <td>C3</td>
             <td>{{ number_format($centroid3->rata_c1, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c2, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c3, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c4, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c5, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c6, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c7, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c8, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c9, 2) }}</td>
            <td>{{ number_format($centroid3->rata_c10, 2) }}</td>
        </tr>
    </tbody>
    </table>
       </div>
            </div>
        </div>
        
</section>
{{-- ---------------------------------------------------------------------------- --}}


{{-- ------------------ITERASI II---(PROSES 2)---S7---------------------------------- --}}
<section class="service_section layout_padding" id="section7">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section6')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section7')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section8')">Proses 3</button>
    <hr>
        <div class="card">
            <h3 class="text-center">Iterasi II</h3>
            <h4 class="text-center">Proses 2 (Menghitung <em>Euclidean Distance</em>  ke <em>Centroid</em>  Baru)</h4>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data7" class="table text-nowrap mb-0 align-middle">
                   <thead class="text-dark">
                <tr>
                    <th>No</th>
                    <th>Jarak ke C1</th>
                    <th>Jarak ke C2</th>
                    <th>Jarak ke C3</th>
                    <th>Cluster</th>
                </tr>
            </thead>
            <tbody class="text-dark">
                @foreach ($jarak2 as $item)
                    <tr>
                 <td>{{ $item['data2']->id }}</td>
                 <td>{{ number_format($item['jarak2C1'], 2) }}</td>
                 <td>{{ number_format($item['jarak2C2'], 2) }}</td>
                 <td>{{ number_format($item['jarak2C3'], 2) }}</td>
                 <td>{{ $item['clusterTerdekat2'] }}</td>
                </tr>
                @endforeach
            </tbody>
                    </table>
                </div>
            </div>
        </div>
        
</section>

{{-- --------------ITERASI II (PROSES 3) S8----------------------- --}}
<section class="service_section layout_padding" id="section8">
    <hr>
    <button type="button" class="btn btn-warning" onclick="showSection('section6')">Proses 1</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section7')">Proses 2</button>
    <button type="button" class="btn btn-warning" onclick="showSection('section8')">Proses 3</button>
    <hr>
          <div class="card">
            <h3 class="text-center">Iterasi II</h3>
            <h4 class="text-center">Proses 3 (Hasil Perhitungan <em>Euclidean Distance</em> )</h4>
            <h5>C1: <b>Tidak Puas</b></h5>
            <h5>C2: <b>Cukup Puas</b></h5>
            <h5>C3: <b>Sangat Puas</b></h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="data8" class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark">
                            <tr>
                                <td>No</td>
                                <td>Cluster</td>
                                <th scope="col">v1</th>
                    <th scope="col">v2</th>
                    <th scope="col">v3</th>
                    <th scope="col">v4</th>
                    <th scope="col">v5</th>
                    <th scope="col">v6</th>
                    <th scope="col">v7</th>
                    <th scope="col">v8</th>
                    <th scope="col">v9</th>
                    <th scope="col">v10</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><b>{{$item->cluster}}</b></td>
                                <td>{{$item->c1}}</td>
                                <td>{{$item->c2}}</td>
                                <td>{{$item->c3}}</td>
                                <td>{{$item->c4}}</td>
                                <td>{{$item->c5}}</td>
                                <td>{{$item->c6}}</td>
                                <td>{{$item->c7}}</td>
                                <td>{{$item->c8}}</td>
                                <td>{{$item->c9}}</td>
                                <td>{{$item->c10}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>



</div>





</div>
  </div>
      <script>
        $(document).ready(function() {
            $('#dataset').DataTable();
        });
    </script>

    <script>
    $(document).ready(function () {
        $('#datatables').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#data2').DataTable();
    });
</script>

<script>
    $(document).ready(function () {
        $('#data3').DataTable();
    });
</script>

<script>
    $(document).ready(function () {
        $('#data4').DataTable();
    });
</script>

<script>
    $(document).ready(function () {
        $('#data7').DataTable();
    });
</script>

<script>
    $(document).ready(function () {
        $('#data8').DataTable();
    });
</script>
<script>
    function showSection(sectionId) {
        // Sembunyikan semua section
        document.querySelectorAll('.service_section').forEach(function(section) {
            section.style.display = 'none';
        });

        // Tampilkan section yang sesuai
        var sectionToShow = document.getElementById(sectionId);
        if (sectionToShow) {
            sectionToShow.style.display = 'block';
        }
    }

    // Secara default, sembunyikan semua section kecuali Section 1
    document.addEventListener('DOMContentLoaded', function() {
        showSection('section1');
    });</script>
</section>
@endsection