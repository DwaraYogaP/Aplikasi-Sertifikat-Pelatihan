@extends('template.template')

@section('nama', 'Sertifikat')

@section('content')
    @foreach ($peserta as $item)
        <h1 class="text-3xl font-bold mt-5">{{$item->nama}}</h1>
    @endforeach
    @foreach ($sertifikat as $sertifikat)
        {{-- {{$sertifikat}} --}}
        
    @endforeach
    @foreach ($peserta as $peserta)

    <div class="w-full">
        <div id="Landscape" class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center">
                <div id="sertifikatLandscape1" class="w-[842px] h-[595px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="text-center">
                        <span style="font-size:50px; font-weight:bold">SERTIFIKAT</span>
                        <br>
                        <span>No {{$peserta->nomor_sertifikat}}/{{$peserta->id_pelatihan}}/{{$peserta->id_peserta}}</span>
                        <br>
                        <span id="span1" style="font- size:25px" class=""><i>Diberikan kepada :</i></span>
                        <br>
                        <span id="span2" style="font-size:30px;" class="font-[{{$peserta->font}}]"><b> {{$peserta->nama}} </b></span>
                        <br>
                        <span id="span3" style="font-size:25px" class=""><i>Atas Partisipasi Sebagai Peserta</i></span>
                        <br>
                        <span id="span4" style="font-size:25px" class="">Dalam Pelatihan {{$peserta->nama_pelatihan}}</span>
                        <br>
                        <span id="span5" style="font-size:20px" class="">Yang diselenggarakan pada tanggal <br> {{$peserta->tgl_mulai}} sampai {{$peserta->tgl_selesai}}</b></span>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <p>Ketua</p>
                            <div class="flex justify-center">
                                <img src="{{asset('tandatangan/'.$peserta->ttd)}}" alt="" width="100px" class="">
                            </div>
                            <p>{{$peserta->nama_penyelenggara}}</p>
                        </div>
                    </div>
                </div>
                <div id="sertifikatLandscape2" class="w-[842px] h-[595px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="w-full flex justify-center">
                        <table id="tabel-data" class="w-full">
                            <thead class="bg-sky-600 text-white">
                                <tr class="bg-sky-600 text-white">
                                    <th colspan="3" class="text-left">{{$peserta->nama_pelatihan}}</th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Materi</th>
                                    <th>JPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach ($pelatihan as $materi)
                                    @php $i++ @endphp
                                    <tr class="bg-slate-300">
                                        <td>{{ $i }}</td>
                                        <td>{{ $materi->nama_materi }}</td>
                                        <td>{{ $materi->jpl }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td class="col-span-2 font-bold">Jumlah</td>
                                    <td class="font-bold">{{$sumJPL}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div id="Portrait" class="flex justify-center flex-col items-center">
            <div class="flex justify-center flex-col items-center">
                <div id="sertifikatPortrait1" class="w-[595px] h-[842px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="text-center relative pt-20">
    
                        <span class="font-bold text-5xl">SERTIFIKAT</span>
                        <hr class="opacity-0">
                        <span class=" top-24">No {{$peserta->nomor_sertifikat}}/{{$peserta->id_pelatihan}}/{{$peserta->id_peserta}}</span>
                        <hr class="h-10 bg-transparent opacity-0">
                        <span id="span1" class="text-2xl mt-5"><i>Diberikan kepada :</i></span>
                        <hr>
                        <span id="span2" class="font-[{{$peserta->font}}] text-3xl"><b> {{$peserta->nama}} </b></span>
                        <hr class="h-10 opacity-0">
                        <span id="span3" class="text-2xl"><i>Atas Partisipasi Sebagai Peserta</i></span>
                        <hr>
                        <span id="span4" class="text-2xl w-max">Dalam Pelatihan {{$peserta->nama_pelatihan}}</span>
                        <hr>
                        <span id="span5" class="text-xl">Yang diselenggarakan pada tanggal <br> {{$peserta->tgl_mulai}} sampai {{$peserta->tgl_selesai}}</b></span>
                    </div>
                    <div class="text-center mt-32">
                        <div class="">
                            <p>Ketua</p>
                            <div class="flex justify-center">
                                <img src="{{asset('tandatangan/'.$peserta->ttd)}}" alt="" width="100px" class="">
                            </div>
                            <p>{{$peserta->nama_penyelenggara}}</p>
                        </div>
                    </div>
                </div>
                <div id="sertifikatPortrait2" class="w-[595px] h-[842px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="w-full flex justify-center">
                        <table id="tabel-data" class="w-full">
                            <thead class="bg-sky-600 text-white">
                                <tr class="bg-sky-600 text-white">
                                    <th colspan="3" class="text-left">{{$peserta->nama_pelatihan}}</th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Materi</th>
                                    <th>JPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach ($pelatihan as $materi)
                                    @php $i++ @endphp
                                    <tr class="bg-slate-200">
                                        <td>{{ $i }}</td>
                                        <td>{{ $materi->nama_materi }}</td>
                                        <td>{{ $materi->jpl }}</td>
                                    </tr>
                                @endforeach
                                <tr class="bg-slate-200">
                                    <td></td>
                                    <td class="col-span-2 font-bold">Jumlah</td>
                                    <td class="font-bold">{{$sumJPL}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
    <div class="flex justify-center">
        <button id="btn-generate" class="bg-sky-500 py-1 px-3 mt-4 text-white hover:bg-sky-800 z-10">Download Sertifikat</button><br>
    </div>

@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    var buttonElement = document.querySelector("#btn-generate");
    buttonElement.addEventListener('click', function() {
        if('{{$countMateri}}' === '0') {
            Swal.fire("Belum Ada Materi");
        } else {
            if('{{$peserta->orientasi}}' === 'landscape') {
                const { jsPDF } = window.jspdf;
                var doc = new jsPDF('landscape', "pt", '{{$peserta->ukuran_kertas}}');
                var width = doc.internal.pageSize.getWidth();
                var height = doc.internal.pageSize.getHeight();
        
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                doc.addImage(img, 'JPEG', 0, 0, width, height);
        
        
                doc.setFont('helvetica', 'bold');    
                doc.setFontSize(37.5);
                doc.text("SERTIFIKAT", width/2, 100, 'center');
        
                doc.setFont('helvetica', 'normal');
                doc.setFontSize(20);
                doc.text("No. {{$peserta->nomor_sertifikat}}/{{$peserta->id_pelatihan}}/{{$peserta->id_peserta}}", width/2, 140, 'center');
        
                doc.setFont('helvetica', 'italic');
                doc.text("Diberikan Kepada", width/2, 170, 'center');
        
        
                doc.setFont('{{$sertifikat->font}}', 'bold');
                doc.setFontSize(30);
                doc.text("{{$peserta->nama}}", width/2, 220, 'center');
        
                doc.setFont('helvetica', 'italic');
                doc.setFontSize(20);
                doc.text("Atas Partisipasi Sebagai Peserta", width/2, 280, 'center');
        
                doc.setFont('helvetica', 'normal');
                doc.text("Dalam Pelatihan {{$peserta->nama_pelatihan}}", width/2, 300, 'center');
                doc.text("Yang diselenggarakan pada tanggal ", width/2, 320, 'center');
                doc.text("{{$peserta->tgl_mulai}} sampai {{$peserta->tgl_selesai}}", width/2, 340, 'center')
                doc.text("Ketua", width/2, 400, 'center');
    
                var ttd = new Image()
                ttd.src = "{{asset('tandatangan/'.$peserta->ttd)}}"
                doc.addImage(ttd, 'JPEG', width/2-50, 390, 100, 100);
    
                doc.text("{{$peserta->nama_penyelenggara}}", width/2, 480, 'center');
        
                // PAGE 2
                doc.addPage('{{$peserta->ukuran_kertas}}', '{{$peserta->orientasi}}');
                var width = doc.internal.pageSize.getWidth();
                var height = doc.internal.pageSize.getHeight();
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                doc.addImage(img, 'JPEG', 0, 0, width, height);
                doc.setFont('helvetica', 'bold');
                doc.setFontSize(37.5)
    
                doc.autoTable({ html: '#tabel-data' })
    
                // doc.output('dataurlnewwindow', 'Sertifikat-{{$peserta->nama}}.pdf')
                doc.save("Sertifikat {{$peserta->nama_pelatihan}} - {{$peserta->nama}}.pdf");
    
    
    
            } else {
                const { jsPDF } = window.jspdf;
                var doc = new jsPDF('portrait', "pt", '{{$peserta->ukuran_kertas}}');
                var width = doc.internal.pageSize.getWidth();
                var height = doc.internal.pageSize.getHeight();
        
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                doc.addImage(img, 'JPEG', 0, 0, width, height);
        
        
                doc.setFont('helvetica', 'bold');    
                doc.setFontSize(37.5);
                doc.text("SERTIFIKAT", width/2, 150, 'center');
        
                doc.setFont('helvetica', 'normal');
                doc.setFontSize(20);
                doc.text("No. {{$peserta->nomor_sertifikat}}/{{$peserta->id_pelatihan}}/{{$peserta->id_peserta}}", width/2, 180, 'center');
        
                doc.setFont('helvetica', 'italic');
                doc.text("Diberikan Kepada", width/2, 240, 'center');
        
        
                doc.setFont('{{$sertifikat->font}}', 'bold');
                doc.setFontSize(40);
                doc.text("{{$peserta->nama}}", width/2, 310, 'center');
        
                doc.setFont('helvetica', 'italic');
                doc.setFontSize(20);
                doc.text("Atas Partisipasi Sebagai Peserta", width/2, 350, 'center');
        
                doc.setFont('helvetica', 'normal');
                doc.text("Dalam Pelatihan {{$peserta->nama_pelatihan}}", width/2, 370, 'center');
                doc.text("Yang diselenggarakan pada tanggal", width/2, 390, 'center');
                doc.text("{{$peserta->tgl_mulai}} sampai {{$peserta->tgl_selesai}}", width/2, 410, 'center');
                doc.text("Ketua", width/2, height-230, 'center');
    
                var ttd2 = new Image()
                ttd2.src = "{{asset('tandatangan/'.$peserta->ttd)}}"
                doc.addImage(ttd2, 'JPEG', width/2-50, height-230, 100, 100);
    
                doc.text("{{$peserta->nama_penyelenggara}}", width/2, height-150, 'center');
    
                
        
                // PAGE 2
                doc.addPage('{{$peserta->ukuran_kertas}}', '{{$peserta->orientasi}}');
                var width = doc.internal.pageSize.getWidth();
                var height = doc.internal.pageSize.getHeight();
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                doc.addImage(img, 'JPEG', 0, 0, width, height);
        
                doc.autoTable({ html: '#tabel-data' })
                
                doc.save("Sertifikat {{$peserta->nama_pelatihan}} - {{$peserta->nama}}.pdf");
    
    
            }
        }

    });
    
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });

    const portrait = document.getElementById('Portrait')
    const landscape = document.getElementById('Landscape')

    const ttd = document.getElementById("ttd")

    if ('{{$peserta->orientasi}}' === 'landscape') {
        portrait.style.display = 'none'
        landscape.style.display = 'block'
    } else {
        portrait.style.display = 'block'
        landscape.style.display = 'none'
    }



</script>
@endsection
