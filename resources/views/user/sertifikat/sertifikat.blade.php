@extends('user.template')
@section('title', 'Sertifikat')

@section('content')
    @foreach ($sertifikat as $sertifikat)
    @endforeach
    @foreach ($peserta as $peserta)
    @endforeach
    @foreach ($pelatihan as $pelatihan)
    @endforeach

    <div class="w-full">
        <div id="LandscapeUser" class="">
            <div class="flex flex-col justify-center items-center">
                <div id="sertifikatLandscape1" class="w-[842px] h-[595px] p-5 border-[10px] border-gray-500 relative bg-cover font-[helvetica]" style="background-image: url({{$sertifikat->link}});">
                    <div class="text-center">
                        <span style="font-size:50px; font-weight:bold">SERTIFIKAT</span>
                        <br>
                        <span>No {{$sertifikat->nomor_sertifikat}}/{{$sertifikat->id_pelatihan}}/{{$peserta->id_peserta}}</span>
                        <br>
                        <span id="span1" style="font- size:25px" class=""><i>Diberikan kepada :</i></span>
                        <br>
                        <span id="span2" style="font-size:30px;" class="font-[{{$sertifikat->font}}]"><b> {{$peserta->nama}} </b></span>
                        <br>
                        <span id="span3" style="font-size:25px" class=""><i>Atas Partisipasi Sebagai Peserta</i></span>
                        <br>
                        <span id="span4" style="font-size:25px" class="">Dalam Pelatihan {{$sertifikat->nama_pelatihan}}</span>
                        <br>
                        <span id="span5" style="font-size:20px" class="">Yang diselenggarakan pada tanggal <br> {{$sertifikat->tgl_mulai}} sampai {{$sertifikat->tgl_selesai}}</b></span>
                    </div>
                    <div class="text-center">
                        <div class="">
                            <p>Ketua</p>
                            <div class="flex justify-center">
                                <img src="{{asset('tandatangan/'.$sertifikat->ttd)}}" alt="" width="100px" class="">
                            </div>
                            <p>{{$sertifikat->nama_penyelenggara}}</p>
                        </div>
                    </div>
                </div>
                <div id="sertifikatLandscape2" class="w-[842px] h-[595px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="w-full flex justify-center">
                        <table id="tabel-data" class="w-full">
                            <thead class="bg-sky-600 text-white">
                                <tr class="bg-sky-600 text-white">
                                    <th colspan="3" class="text-left">{{$sertifikat->nama_pelatihan}}</th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Materi</th>
                                    <th>JPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach ($materi as $materi)
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

        <div id="PortraitUser" class="">
            <div class="flex justify-center flex-col items-center">
                <div id="sertifikatPortrait1" class="w-[595px] h-[842px] p-5 border-[10px] border-gray-500 relative bg-cover font-[helvetica]" style="background-image: url({{$sertifikat->link}});">
                    <div class="text-center relative pt-20">
    
                        <span class="font-bold text-5xl">SERTIFIKAT</span>
                        <hr class="opacity-0">
                        <span class=" top-24">No {{$sertifikat->nomor_sertifikat}}/{{$sertifikat->id_pelatihan}}/{{$peserta->id_peserta}}</span>
                        <hr class="h-10 bg-transparent opacity-0">
                        <span id="span1" class="text-2xl mt-5"><i>Diberikan kepada :</i></span>
                        <hr>
                        <span id="span2" class="font-[{{$sertifikat->font}}] text-3xl"><b> {{$peserta->nama}} </b></span>
                        <hr class="h-10 opacity-0">
                        <span id="span3" class="text-2xl"><i>Atas Partisipasi Sebagai Peserta</i></span>
                        <hr>
                        <span id="span4" class="text-2xl w-max">Dalam Pelatihan {{$sertifikat->nama_pelatihan}}</span>
                        <hr>
                        <span id="span5" class="text-xl">Yang diselenggarakan pada tanggal <br> {{$sertifikat->tgl_mulai}} sampai {{$sertifikat->tgl_selesai}}</b></span>
                    </div>
                    <div class="text-center mt-32">
                        <div class="">
                            <p>Ketua</p>
                            <div class="flex justify-center">
                                <img src="{{asset('tandatangan/'.$sertifikat->ttd)}}" alt="" width="100px" class="">
                            </div>
                            <p>{{$sertifikat->nama_penyelenggara}}</p>
                        </div>
                    </div>
                </div>
                <div id="sertifikatPortrait2" class="w-[595px] h-[842px] p-5 border-[10px] border-gray-500 relative bg-cover" style="background-image: url({{$sertifikat->link}});">
                    <div class="w-full flex justify-center">
                        <table id="tabel-data" class="w-full">
                            <thead class="bg-sky-600 text-white">
                                <tr class="bg-sky-600 text-white">
                                    <th colspan="3" class="text-left">{{$sertifikat->nama_pelatihan}}</th>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Materi</th>
                                    <th>JPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=0 @endphp
                                @foreach ($materi2 as $materi)
                                    @php $i++ @endphp
                                    <tr class="bg-slate-300">
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
    
    <div class="flex justify-center">
        <button id="download" class="bg-sky-500 py-1 px-3 mt-4 text-white hover:bg-sky-800 z-10">Download Sertifikat</button><br>
    </div>


@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://unpkg.com/jspdf-autotable"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var buttonDownload = document.querySelector("#download");
    buttonDownload.addEventListener('click', function() {
        if('{{$countMateri}}' === '0') {
            Swal.fire("Belum Ada Materi");
        } else {

            if('{{$sertifikat->orientasi}}' === 'landscape') {
                const { jsPDF } = window.jspdf;
                var pdf = new jsPDF('landscape', "pt", '{{$sertifikat->ukuran_kertas}}');
                var lebar = pdf.internal.pageSize.getWidth()
                var tinggi = pdf.internal.pageSize.getHeight()
        
                var bg1 = new Image()
                bg1.src = '{{$sertifikat->link}}'
                pdf.addImage(bg1, 'JPEG', 0, 0, lebar, tinggi)
        
                pdf.setFont('helvetica', 'bold');    
                pdf.setFontSize(37.5);
                pdf.text("SERTIFIKAT", lebar/2, 100, 'center');
        
                pdf.setFont('helvetica', 'normal');    
                pdf.setFontSize(20);
                pdf.text("No. {{$sertifikat->nomor_sertifikat}}/{{$sertifikat->id_pelatihan}}/{{$peserta->id_peserta}}", lebar/2, 140, 'center');
        
                pdf.setFont('helvetica', 'italic');    
                pdf.text("Diberikan Kepada", lebar/2, 170, 'center');
        
                pdf.setFont('{{$sertifikat->font}}', 'bold');    
                pdf.setFontSize(30);
                pdf.text("{{$peserta->nama}}", lebar/2, 220, 'center');
        
                pdf.setFont('helvetica', 'italic');    
                pdf.setFontSize(20);
                pdf.text("Atas Partisipasi Sebagai Peserta", lebar/2, 280, 'center');
        
                pdf.setFont('helvetica', 'normal');    
                pdf.text("Dalam Pelatihan {{$sertifikat->nama_pelatihan}}", lebar/2, 300, 'center');
                pdf.text("Yang diselenggarakan pada tanggal ", lebar/2, 320, 'center');
                pdf.text("{{$sertifikat->tgl_mulai}} sampai {{$sertifikat->tgl_selesai}}", lebar/2, 340, 'center')
                pdf.text("Ketua", lebar/2, 400, 'center');
        
                var ttd = new Image()
                ttd.src = "{{asset('tandatangan/'.$sertifikat->ttd)}}"
                pdf.addImage(ttd, 'JPEG', lebar/2-50, 390, 100, 100);
                pdf.text("{{$sertifikat->nama_penyelenggara}}", lebar/2, 480, 'center');
        
                // PAGE 2
                pdf.addPage("{{$sertifikat->ukuran_kertas}}", "{{$sertifikat->orientasi}}")
        
                var bg2 = new Image()
                bg2.src = "{{$sertifikat->link}}"
                pdf.addImage(bg2, 'JPEG', 0, 0, lebar, tinggi);
        
                pdf.autoTable({ html: '#tabel-data' })
        
                pdf.save("Sertifikat {{$sertifikat->nama_pelatihan}} - {{$peserta->nama}}.pdf");
            } else {
                const { jsPDF } = window.jspdf;
                var pdf = new jsPDF('portrait', "pt", '{{$sertifikat->ukuran_kertas}}');
                var width = pdf.internal.pageSize.getWidth();
                var height = pdf.internal.pageSize.getHeight();
        
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                pdf.addImage(img, 'JPEG', 0, 0, width, height);
        
        
                pdf.setFont('helvetica', 'bold');    
                pdf.setFontSize(37.5);
                pdf.text("SERTIFIKAT", width/2, 150, 'center');
        
                pdf.setFont('helvetica', 'normal');
                pdf.setFontSize(20);
                pdf.text("No. {{$sertifikat->nomor_sertifikat}}/{{$sertifikat->id_pelatihan}}/{{$peserta->id_peserta}}", width/2, 180, 'center');
        
                pdf.setFont('helvetica', 'italic');
                pdf.text("Diberikan Kepada", width/2, 240, 'center');
        
        
                pdf.setFont('{{$sertifikat->font}}', 'bold');
                pdf.setFontSize(40);
                pdf.text("{{$peserta->nama}}", width/2, 310, 'center');
        
                pdf.setFont('helvetica', 'italic');
                pdf.setFontSize(20);
                pdf.text("Atas Partisipasi Sebagai Peserta", width/2, 350, 'center');
        
                pdf.setFont('helvetica', 'normal');
                pdf.text("Dalam Pelatihan {{$sertifikat->nama_pelatihan}}", width/2, 370, 'center');
                pdf.text("Yang diselenggarakan pada tanggal", width/2, 390, 'center');
                pdf.text("{{$sertifikat->tgl_mulai}} sampai {{$sertifikat->tgl_selesai}}", width/2, 410, 'center');
                pdf.text("Ketua", width/2, height-230, 'center');
    
                var ttd2 = new Image()
                ttd2.src = "{{asset('tandatangan/'.$sertifikat->ttd)}}"
                pdf.addImage(ttd2, 'JPEG', width/2-50, height-230, 100, 100);
    
                pdf.text("{{$sertifikat->nama_penyelenggara}}", width/2, height-150, 'center');
    
                // PAGE 2
                pdf.addPage('{{$sertifikat->ukuran_kertas}}', '{{$sertifikat->orientasi}}');
                var width = pdf.internal.pageSize.getWidth();
                var height = pdf.internal.pageSize.getHeight();
                var img = new Image()
                img.src = "{{$sertifikat->link}}"
                pdf.addImage(img, 'JPEG', 0, 0, width, height);
        
                pdf.autoTable({ html: '#tabel-data' })
                
                pdf.save("Sertifikat {{$sertifikat->nama_pelatihan}} - {{$peserta->nama}}.pdf");
            }
        }
    
    });


    const portraitUser = document.getElementById('PortraitUser')
    const landscapeUser = document.getElementById('LandscapeUser')

    if ('{{$sertifikat->orientasi}}' === 'landscape') {
        landscapeUser.style.display = 'block';
        portraitUser.style.display = 'none';
    } else {
        portraitUser.style.display = 'block';
        landscapeUser.style.display = 'none';
    }


</script>
@endsection