<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Pendaftaran | Puskesmas Mandiangin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <a class="btn btn-info mb-4" href="{{ route('daftar-add') }}">+ Pendaftaran</a>
        <a class="btn btn-primary mb-4" href="{{ route('home') }}">Home</a>
        <a class="btn btn-danger mb-4" href="{{ route('logout') }}">Logout</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        {{-- <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a> --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tgl Daftar</th>
                                    <th scope="col">No RM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tgl Lahir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @forelse ($daftars as $index => $daftar)
                                    <tr>
                                        <td scope="row">{{ $index + $daftars->firstItem() }}</td>
                                        <td>{!! $daftar->tgl_daftar !!}</td>
                                        <td>{!! $daftar->no_rm !!}</td>
                                        <td>{!! $daftar->nama_pasien !!}</td>
                                        <td>{!! $daftar->tgl_lahir !!}</td>
                                        {{-- <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('posts.destroy', $daftar->id) }}" method="POST">
                                                <a href="{{ route('posts.edit', $daftar->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                    <?php $no++; ?>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Daftar belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $daftars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="print-tracer" style="display:none;">
        @if (session()->has('success'))
            <p>
                Puskesmas Mandiangin <br>
                Bukittinggi - SUMBAR <br>
                -------------------------------------- <br>
                TRACER - REKAM MEDIK <br>
                --------------------------------------
            </p>
            <table>
                <tr>
                    <td>No. MR</td>
                    <td>:</td>
                    <td>{{ session('dataPx.no_rm') }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.nama_pasien') }}</td>
                </tr>
                <tr>
                    <td>Tgl. Lahir</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.tgl_lahir') }}</td>
                </tr>
                <tr>
                    <td>Poliklinik</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.poli') }}</td>
                </tr>
                <tr>
                    <td>Tgl. Periksa</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.tgl_daftar') }}</td>
                </tr>
            </table>
            -------------------------------------------------------- <br>
            <p>
                Puskesmas Mandiangin <br>
                Bukittinggi - SUMBAR <br>
                -------------------------------------- <br>
                TRACER - REKAM MEDIK <br>
                --------------------------------------
            </p>
            <table>
                <tr>
                    <td>No. MR</td>
                    <td>:</td>
                    <td>{{ session('dataPx.no_rm') }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.nama_pasien') }}</td>
                </tr>
                <tr>
                    <td>Tgl. Lahir</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.tgl_lahir') }}</td>
                </tr>
                <tr>
                    <td>Poliklinik</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.poli') }}</td>
                </tr>
                <tr>
                    <td>Tgl. Periksa</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>{{ session('dataPx.tgl_daftar') }}</td>
                </tr>
            </table>
        @endif
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- <script>
        //message with toastr
        @if (session()->has('success'))
            // toastr.success('{{ session('success') }}', 'BERHASIL!');
            alert('{{ session('success') }}');
        @elseif (session()->has('error'))
            // toastr.error('{{ session('error') }}', 'GAGAL!');
            alert('{{ session('error') }}');
        @endif
    </script> --}}

    <script>
        $(document).ready(function() {
            @if (session()->has('success'))
                printDiv('print-tracer');
            @endif
        })

        function printDiv(elementId) {
            var a = document.getElementById('printing-css').value;
            var b = document.getElementById(elementId).innerHTML;
            window.frames["print_frame"].document.title = document.title;
            window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
            window.frames["print_frame"].window.focus();
            window.frames["print_frame"].window.print();
        }
    </script>

</body>

<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>

</html>
